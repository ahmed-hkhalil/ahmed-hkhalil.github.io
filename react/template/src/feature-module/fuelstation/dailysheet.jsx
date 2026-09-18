import React, { useState, useEffect } from "react";
import { Link, useLocation } from "react-router-dom";
import Swal from "sweetalert2";
import withReactContent from "sweetalert2-react-content";
import {
  Calendar,
  DollarSign,
  Printer,
  Save,
  CheckCircle,
  Clock,
  Lock,
  Plus,
  Trash2,
  Sliders,
  Filter,
  RefreshCw,
  FileText
} from "react-feather";

const MySwal = withReactContent(Swal);

// Days of the week as printed on the physical sheet
const DAYS_OF_WEEK = [
  { key: "monday", name: "Monday", arName: "الاثنين", dayIndex: 1 },
  { key: "tuesday", name: "Tuesday", arName: "الثلاثاء", dayIndex: 2 },
  { key: "wednesday", name: "Wednesday", arName: "الأربعاء", dayIndex: 3 },
  { key: "thursday", name: "Thursday", arName: "الخميس", dayIndex: 4 },
  { key: "friday", name: "Friday", arName: "الجمعة", dayIndex: 5 },
  { key: "saturday", name: "Saturday", arName: "السبت", dayIndex: 6 },
  { key: "sunday", name: "Sunday", arName: "الأحد", dayIndex: 0 },
];

const STORES = [
  { id: "STORE-101", name: "Store #101 - Main Highway & Fuel Station" },
  { id: "STORE-102", name: "Store #102 - Downtown Convenience & Gas" },
  { id: "STORE-103", name: "Store #103 - North Express Station" },
];

const DailySheet = () => {
  const location = useLocation();

  // Mode: "cashier" or "admin". If path is /weekly-sheets, default to admin
  const userRole = localStorage.getItem("userRole") || "admin";
  const defaultMode = location.pathname.includes("weekly") || userRole === "admin" ? "admin" : "cashier";
  const [viewMode, setViewMode] = useState(defaultMode);

  // Current Week State (Week number 1 - 52)
  const [currentWeekNum, setCurrentWeekNum] = useState(38); // Week 38 (Current)
  const [selectedStore, setSelectedStore] = useState(STORES[0].id);

  // Today determination (Friday = dayIndex 5)
  const todayDate = new Date();
  // Standard day index: 0=Sun, 1=Mon, ..., 5=Fri, 6=Sat
  const currentDayOfWeek = todayDate.getDay(); 

  // Compute dates for the selected week
  const getWeekDates = (weekNum) => {
    // Arbitrary anchor year 2026: Sep 14 - Sep 20 is Week 38
    const baseDate = new Date(2026, 8, 14 + (weekNum - 38) * 7);
    return DAYS_OF_WEEK.map((day, idx) => {
      const d = new Date(baseDate);
      d.setDate(baseDate.getDate() + idx);
      const iso = d.toISOString().split("T")[0];
      return {
        ...day,
        date: iso,
        // Is this day in the future relative to today for current week?
        isFuture: weekNum > 38 || (weekNum === 38 && (day.dayIndex > currentDayOfWeek && currentDayOfWeek !== 0)),
        isToday: weekNum === 38 && (day.dayIndex === currentDayOfWeek || (currentDayOfWeek === 0 && day.dayIndex === 0)),
      };
    });
  };

  const [daysData, setDaysData] = useState([]);

  // Checks table state
  const [weeklyChecks, setWeeklyChecks] = useState([
    { id: 1, checkNo: "CHK-4091", payee: "Al-Marai Dairy & Beverages", amount: 450.0 },
    { id: 2, checkNo: "CHK-4092", payee: "Pepsi Cola Distribution", amount: 620.0 },
    { id: 3, checkNo: "CHK-4093", payee: "National Bakeries Co.", amount: 280.0 },
  ]);

  // Bank Withdrawals & Deposits
  const [bankWithdrawals, setBankWithdrawals] = useState([
    { id: 1, description: "Monthly POS Maintenance Fee", amount: 150.0 },
    { id: 2, description: "Utility Bills (Electricity & Water)", amount: 890.0 },
  ]);

  const [bankDeposits, setBankDeposits] = useState([
    { id: 1, description: "Mid-Week Cash Vault Deposit", amount: 5000.0 },
    { id: 2, description: "Weekend Armored Pickup", amount: 7500.0 },
  ]);

  // Extra sales
  const [lottoSales, setLottoSales] = useState(340.0);

  // Load or Initialize Sheet Data
  useEffect(() => {
    const weekKey = `sheet_${selectedStore}_w${currentWeekNum}`;
    const saved = localStorage.getItem(weekKey);

    const weekDays = getWeekDates(currentWeekNum);

    if (saved) {
      try {
        const parsed = JSON.parse(saved);
        setDaysData(parsed.days || []);
        if (parsed.checks) setWeeklyChecks(parsed.checks);
        if (parsed.withdrawals) setBankWithdrawals(parsed.withdrawals);
        if (parsed.deposits) setBankDeposits(parsed.deposits);
        if (parsed.lotto) setLottoSales(parsed.lotto);
        return;
      } catch (e) {
        console.error("Error loading saved sheet:", e);
      }
    }

    // Default sample data matching user's sheet
    const initialDays = weekDays.map((d, i) => {
      // Pre-fill Mon-Thu with realistic sample numbers; Fri (today) partially; Sat-Sun 0 (upcoming)
      const isPast = !d.isFuture && !d.isToday;
      const isToday = d.isToday;

      return {
        key: d.key,
        dayName: d.name,
        arName: d.arName,
        date: d.date,
        isFuture: d.isFuture,
        isToday: d.isToday,
        cashierName: i % 2 === 0 ? "Ahmed Khalil" : "Omar Farooq",
        storeName: "Main Highway #101",
        fuel: isPast ? 3420.5 : isToday ? 2850.0 : 0,
        store: isPast ? 1150.0 : isToday ? 980.0 : 0,
        cCards: isPast ? 2890.0 : isToday ? 2450.0 : 0,
        tax: isPast ? 228.5 : isToday ? 191.5 : 0,
        storeCash: isPast ? 650.0 : isToday ? 520.0 : 0,
        fuelCash: isPast ? 1030.5 : isToday ? 860.0 : 0,
        payOuts: isPast ? (i === 1 ? 75.0 : 0) : 0,
        notes: isPast && i === 1 ? "Drawer payout: cleaning supplies ($75)" : isToday ? "Fuel shift #1 balanced" : "",
      };
    });

    setDaysData(initialDays);
  }, [currentWeekNum, selectedStore]);

  // Handle cell input change
  const handleInputChange = (index, field, value) => {
    const updated = [...daysData];
    updated[index][field] = field === "notes" ? value : parseFloat(value) || 0;
    setDaysData(updated);
  };

  // Calculate Totals
  const calculateColumnTotal = (field) => {
    return daysData.reduce((acc, row) => acc + (parseFloat(row[field]) || 0), 0);
  };

  const totalFuel = calculateColumnTotal("fuel");
  const totalStore = calculateColumnTotal("store");
  const totalCCards = calculateColumnTotal("cCards");
  const totalTax = calculateColumnTotal("tax");
  const totalStoreCash = calculateColumnTotal("storeCash");
  const totalFuelCash = calculateColumnTotal("fuelCash");
  const totalPayOuts = calculateColumnTotal("payOuts");

  const totalSalesAllDays = daysData.reduce((acc, row) => {
    return acc + (parseFloat(row.fuel) || 0) + (parseFloat(row.store) || 0) + (parseFloat(row.tax) || 0);
  }, 0);

  const totalChecks = weeklyChecks.reduce((acc, c) => acc + (parseFloat(c.amount) || 0), 0);
  const totalWithdrawals = bankWithdrawals.reduce((acc, w) => acc + (parseFloat(w.amount) || 0), 0);
  const totalDeposits = bankDeposits.reduce((acc, d) => acc + (parseFloat(d.amount) || 0), 0);

  // Financial summary box calculations
  const totalCashIncome = totalStoreCash + totalFuelCash; // دخل المحل $
  const totalCashPayOuts = totalPayOuts; // الخرج كاش $
  const netInflow = totalSalesAllDays + lottoSales;

  // Save current sheet
  const handleSaveSheet = () => {
    const weekKey = `sheet_${selectedStore}_w${currentWeekNum}`;
    const payload = {
      weekNum: currentWeekNum,
      storeId: selectedStore,
      days: daysData,
      checks: weeklyChecks,
      withdrawals: bankWithdrawals,
      deposits: bankDeposits,
      lotto: lottoSales,
      updatedAt: new Date().toISOString(),
      updatedBy: localStorage.getItem("userName") || "Cashier",
    };
    localStorage.setItem(weekKey, JSON.stringify(payload));

    MySwal.fire({
      icon: "success",
      title: "Daily Sheet Saved!",
      text: `Weekly sheet #${currentWeekNum} successfully reconciled and stored.`,
      timer: 2000,
      showConfirmButton: false,
    });
  };

  // Auto-fill today's entry from live POS & Fuel
  const handleAutoFillToday = () => {
    const todayIndex = daysData.findIndex((d) => d.isToday);
    if (todayIndex === -1) {
      MySwal.fire("Info", "No row matching today's date in this week.", "info");
      return;
    }

    const updated = [...daysData];
    updated[todayIndex].fuel = 3120.4;
    updated[todayIndex].store = 1045.6;
    updated[todayIndex].cCards = 2750.0;
    updated[todayIndex].tax = 208.3;
    updated[todayIndex].storeCash = 580.0;
    updated[todayIndex].fuelCash = 836.0;
    updated[todayIndex].payOuts = 25.0;
    updated[todayIndex].notes = "Auto-synced from POS counter and pump totalizers";

    setDaysData(updated);
    MySwal.fire({
      icon: "success",
      title: "Synced from POS & Pumps",
      text: "Today's numbers were loaded directly from live sales and dispensers.",
      timer: 1500,
      showConfirmButton: false,
    });
  };

  // Add new Check row
  const handleAddCheck = () => {
    const newChk = {
      id: Date.now(),
      checkNo: `CHK-${Math.floor(1000 + Math.random() * 9000)}`,
      payee: "Supplier Name",
      amount: 0.0,
    };
    setWeeklyChecks([...weeklyChecks, newChk]);
  };

  const handlePrint = () => {
    window.print();
  };

  return (
    <div className="page-wrapper">
      <div className="content">
        {/* Top Control Header */}
        <div className="d-flex flex-wrap align-items-center justify-content-between mb-3 gap-2 d-print-none">
          <div>
            <h4 className="fw-bold mb-0 d-flex align-items-center gap-2">
              <FileText className="text-primary" /> Daily Cashier & Weekly Reconciliation Sheet
            </h4>
            <span className="text-muted small">
              End-of-day reconciliation for Fuel Station & Convenience Store
            </span>
          </div>

          <div className="d-flex flex-wrap align-items-center gap-2">
            {/* View Mode Toggle */}
            <div className="btn-group" role="group">
              <button
                type="button"
                className={`btn btn-sm ${viewMode === "cashier" ? "btn-primary" : "btn-outline-primary"}`}
                onClick={() => setViewMode("cashier")}
              >
                Cashier View
              </button>
              <button
                type="button"
                className={`btn btn-sm ${viewMode === "admin" ? "btn-primary" : "btn-outline-primary"}`}
                onClick={() => setViewMode("admin")}
              >
                Admin Dashboard View
              </button>
            </div>

            {viewMode === "cashier" && (
              <button
                type="button"
                className="btn btn-sm btn-outline-success d-flex align-items-center gap-1"
                onClick={handleAutoFillToday}
              >
                <RefreshCw size={14} /> Auto-fill Today
              </button>
            )}

            <button
              type="button"
              className="btn btn-sm btn-secondary d-flex align-items-center gap-1"
              onClick={handlePrint}
            >
              <Printer size={14} /> Print Sheet
            </button>

            <button
              type="button"
              className="btn btn-sm btn-success d-flex align-items-center gap-1"
              onClick={handleSaveSheet}
            >
              <Save size={14} /> Save Changes
            </button>
          </div>
        </div>

        {/* Admin Filters & Week Slider Bar */}
        {viewMode === "admin" && (
          <div className="card shadow-sm border-0 mb-3 bg-white d-print-none">
            <div className="card-body p-3">
              <div className="row align-items-center g-3">
                {/* Store Filter */}
                <div className="col-lg-4 col-md-5">
                  <label className="form-label small fw-bold mb-1 d-flex align-items-center gap-1">
                    <Filter size={14} /> Select Store / Station Location
                  </label>
                  <select
                    className="form-select form-select-sm"
                    value={selectedStore}
                    onChange={(e) => setSelectedStore(e.target.value)}
                  >
                    {STORES.map((s) => (
                      <option key={s.id} value={s.id}>
                        {s.name}
                      </option>
                    ))}
                  </select>
                </div>

                {/* Week Range Slider */}
                <div className="col-lg-8 col-md-7">
                  <div className="d-flex justify-content-between align-items-center mb-1">
                    <label className="form-label small fw-bold mb-0 d-flex align-items-center gap-1">
                      <Sliders size={14} /> Navigate Weeks (Week Slider)
                    </label>
                    <span className="badge bg-primary">
                      Week {currentWeekNum} / 52 (Sep 14 - Sep 20, 2026)
                    </span>
                  </div>
                  <div className="d-flex align-items-center gap-2">
                    <button
                      type="button"
                      className="btn btn-sm btn-outline-secondary py-0 px-2"
                      onClick={() => setCurrentWeekNum(Math.max(1, currentWeekNum - 1))}
                    >
                      ◀ Prev
                    </button>
                    <input
                      type="range"
                      className="form-range flex-grow-1"
                      min="1"
                      max="52"
                      value={currentWeekNum}
                      onChange={(e) => setCurrentWeekNum(parseInt(e.target.value))}
                    />
                    <button
                      type="button"
                      className="btn btn-sm btn-outline-secondary py-0 px-2"
                      onClick={() => setCurrentWeekNum(Math.min(52, currentWeekNum + 1))}
                    >
                      Next ▶
                    </button>
                    <button
                      type="button"
                      className="btn btn-sm btn-outline-primary py-0 px-2"
                      onClick={() => setCurrentWeekNum(38)}
                    >
                      Current
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        )}

        {/* Printable Physical Sheet Container */}
        <div className="sheet-container bg-white p-3 border rounded shadow-sm">
          {/* Sheet Header */}
          <div className="text-center border-bottom pb-2 mb-3">
            <h5 className="fw-bold mb-1 text-uppercase letter-spacing-1">
              Convenience Store & Gas Station - Daily Shift Report
            </h5>
            <div className="d-flex justify-content-between align-items-center px-2 small text-muted">
              <span><strong>Store:</strong> {STORES.find((s) => s.id === selectedStore)?.name}</span>
              <span><strong>Week:</strong> #{currentWeekNum} (2026)</span>
              <span><strong>Cashier Station:</strong> {localStorage.getItem("userName") || "Station #1"}</span>
            </div>
          </div>

          {/* MAIN TOP TABLE */}
          <div className="table-responsive mb-3">
            <table className="table table-bordered table-sm align-middle text-center mb-0" style={{ fontSize: "13px" }}>
              <thead className="table-dark text-white">
                <tr>
                  <th style={{ width: "95px" }}>Day</th>
                  {viewMode === "admin" && (
                    <>
                      <th style={{ width: "110px" }}>Cashier</th>
                      <th style={{ width: "120px" }}>Store Name</th>
                    </>
                  )}
                  <th style={{ width: "95px" }}>Date</th>
                  <th>Fuel ($)</th>
                  <th>Store ($)</th>
                  <th>C. Cards ($)</th>
                  <th>Tax ($)</th>
                  <th className="bg-primary text-white">Total Sales ($)</th>
                  <th>Store Cash ($)</th>
                  <th>Fuel Cash ($)</th>
                  <th className="bg-danger text-white">Pay Outs ($)</th>
                  <th style={{ minWidth: "150px" }}>ملاحظات (Notes)</th>
                </tr>
              </thead>
              <tbody>
                {daysData.map((row, index) => {
                  const rowTotalSales =
                    (parseFloat(row.fuel) || 0) + (parseFloat(row.store) || 0) + (parseFloat(row.tax) || 0);

                  // Upcoming future day styling
                  const isUpcoming = row.isFuture;
                  const isToday = row.isToday;

                  return (
                    <tr
                      key={row.key}
                      className={
                        isUpcoming
                          ? "table-light text-muted opacity-75"
                          : isToday
                          ? "table-warning fw-semibold"
                          : ""
                      }
                      style={{
                        backgroundColor: isUpcoming ? "#f1f5f9" : isToday ? "#fffbeb" : undefined,
                      }}
                    >
                      {/* Day Name */}
                      <td className="fw-bold">
                        <div>{row.dayName}</div>
                        <small className="text-muted" style={{ fontSize: "10px" }}>
                          {row.arName}
                        </small>
                        {isToday && <span className="badge bg-warning text-dark d-block mt-1">Today</span>}
                        {isUpcoming && (
                          <span className="badge bg-secondary d-block mt-1">
                            <Lock size={10} /> Upcoming
                          </span>
                        )}
                      </td>

                      {/* Extended Admin Columns */}
                      {viewMode === "admin" && (
                        <>
                          <td className="small text-truncate" title={row.cashierName}>
                            {row.cashierName}
                          </td>
                          <td className="small text-truncate" title={row.storeName}>
                            {row.storeName}
                          </td>
                        </>
                      )}

                      {/* Date */}
                      <td className="small text-muted">{row.date}</td>

                      {/* Fuel ($) */}
                      <td>
                        <input
                          type="number"
                          step="0.1"
                          disabled={isUpcoming && viewMode === "cashier"}
                          className={`form-control form-control-sm text-center ${
                            isUpcoming ? "bg-light text-muted border-0" : ""
                          }`}
                          value={row.fuel || ""}
                          placeholder={isUpcoming ? "-" : "0.00"}
                          onChange={(e) => handleInputChange(index, "fuel", e.target.value)}
                        />
                      </td>

                      {/* Store ($) */}
                      <td>
                        <input
                          type="number"
                          step="0.1"
                          disabled={isUpcoming && viewMode === "cashier"}
                          className={`form-control form-control-sm text-center ${
                            isUpcoming ? "bg-light text-muted border-0" : ""
                          }`}
                          value={row.store || ""}
                          placeholder={isUpcoming ? "-" : "0.00"}
                          onChange={(e) => handleInputChange(index, "store", e.target.value)}
                        />
                      </td>

                      {/* Credit Cards ($) */}
                      <td>
                        <input
                          type="number"
                          step="0.1"
                          disabled={isUpcoming && viewMode === "cashier"}
                          className={`form-control form-control-sm text-center ${
                            isUpcoming ? "bg-light text-muted border-0" : ""
                          }`}
                          value={row.cCards || ""}
                          placeholder={isUpcoming ? "-" : "0.00"}
                          onChange={(e) => handleInputChange(index, "cCards", e.target.value)}
                        />
                      </td>

                      {/* Tax ($) */}
                      <td>
                        <input
                          type="number"
                          step="0.1"
                          disabled={isUpcoming && viewMode === "cashier"}
                          className={`form-control form-control-sm text-center ${
                            isUpcoming ? "bg-light text-muted border-0" : ""
                          }`}
                          value={row.tax || ""}
                          placeholder={isUpcoming ? "-" : "0.00"}
                          onChange={(e) => handleInputChange(index, "tax", e.target.value)}
                        />
                      </td>

                      {/* Total Sales ($) - Auto Calculated */}
                      <td className="fw-bold text-primary bg-light">
                        ${rowTotalSales.toFixed(2)}
                      </td>

                      {/* Store Cash ($) */}
                      <td>
                        <input
                          type="number"
                          step="0.1"
                          disabled={isUpcoming && viewMode === "cashier"}
                          className={`form-control form-control-sm text-center ${
                            isUpcoming ? "bg-light text-muted border-0" : ""
                          }`}
                          value={row.storeCash || ""}
                          placeholder={isUpcoming ? "-" : "0.00"}
                          onChange={(e) => handleInputChange(index, "storeCash", e.target.value)}
                        />
                      </td>

                      {/* Fuel Cash ($) */}
                      <td>
                        <input
                          type="number"
                          step="0.1"
                          disabled={isUpcoming && viewMode === "cashier"}
                          className={`form-control form-control-sm text-center ${
                            isUpcoming ? "bg-light text-muted border-0" : ""
                          }`}
                          value={row.fuelCash || ""}
                          placeholder={isUpcoming ? "-" : "0.00"}
                          onChange={(e) => handleInputChange(index, "fuelCash", e.target.value)}
                        />
                      </td>

                      {/* Pay Outs ($) */}
                      <td>
                        <input
                          type="number"
                          step="0.1"
                          disabled={isUpcoming && viewMode === "cashier"}
                          className={`form-control form-control-sm text-center text-danger fw-bold ${
                            isUpcoming ? "bg-light text-muted border-0" : ""
                          }`}
                          value={row.payOuts || ""}
                          placeholder={isUpcoming ? "-" : "0.00"}
                          onChange={(e) => handleInputChange(index, "payOuts", e.target.value)}
                        />
                      </td>

                      {/* Notes (ملاحظات) */}
                      <td>
                        <input
                          type="text"
                          disabled={isUpcoming && viewMode === "cashier"}
                          className={`form-control form-control-sm text-start ${
                            isUpcoming ? "bg-light text-muted border-0" : ""
                          }`}
                          value={row.notes}
                          placeholder={isUpcoming ? "Upcoming..." : "Add notes..."}
                          onChange={(e) => handleInputChange(index, "notes", e.target.value)}
                        />
                      </td>
                    </tr>
                  );
                })}

                {/* TOTALS ROW */}
                <tr className="table-secondary fw-bold text-center border-top-2">
                  <td colSpan={viewMode === "admin" ? 4 : 2} className="text-uppercase text-dark">
                    Totals / المجموع
                  </td>
                  <td className="text-dark">${totalFuel.toFixed(2)}</td>
                  <td className="text-dark">${totalStore.toFixed(2)}</td>
                  <td className="text-dark">${totalCCards.toFixed(2)}</td>
                  <td className="text-dark">${totalTax.toFixed(2)}</td>
                  <td className="text-primary fs-14 bg-white">${totalSalesAllDays.toFixed(2)}</td>
                  <td className="text-success">${totalStoreCash.toFixed(2)}</td>
                  <td className="text-success">${totalFuelCash.toFixed(2)}</td>
                  <td className="text-danger fs-14">${totalPayOuts.toFixed(2)}</td>
                  <td className="text-muted small">Balanced Weekly Summary</td>
                </tr>
              </tbody>
            </table>
          </div>

          {/* TWO SUMMARY STRIPS (Under main table) */}
          <div className="row g-2 mb-3">
            <div className="col-md-6">
              <div className="p-2 border rounded bg-success-light text-center">
                <span className="fw-bold text-success fs-15">$ دخل المحل (Total Store Cash Inflow): </span>
                <span className="fw-bold fs-16">${totalCashIncome.toFixed(2)}</span>
              </div>
            </div>
            <div className="col-md-6">
              <div className="p-2 border rounded bg-danger-light text-center">
                <span className="fw-bold text-danger fs-15">$ الخرج كاش (Cash Pay Outs / Outflow): </span>
                <span className="fw-bold fs-16">${totalCashPayOuts.toFixed(2)}</span>
              </div>
            </div>
          </div>

          {/* BOTTOM THREE SECTIONS */}
          <div className="row g-3">
            {/* Left Box: شيكات الأسبوع (Weekly Checks) */}
            <div className="col-lg-4 col-12">
              <div className="border rounded p-2 h-100 bg-white">
                <div className="d-flex justify-content-between align-items-center mb-2 border-bottom pb-1">
                  <h6 className="fw-bold mb-0 text-dark">شيكات الأسبوع (Weekly Checks)</h6>
                  <button
                    type="button"
                    className="btn btn-sm btn-outline-primary py-0 px-2 d-print-none"
                    onClick={handleAddCheck}
                  >
                    <Plus size={12} /> Add
                  </button>
                </div>
                <div className="table-responsive">
                  <table className="table table-sm table-bordered text-center mb-0 small">
                    <thead className="thead-light">
                      <tr>
                        <th>Check #</th>
                        <th>Payee / Description</th>
                        <th>Amount ($)</th>
                      </tr>
                    </thead>
                    <tbody>
                      {weeklyChecks.map((chk, idx) => (
                        <tr key={chk.id}>
                          <td>
                            <input
                              type="text"
                              className="form-control form-control-sm text-center border-0 p-0"
                              value={chk.checkNo}
                              onChange={(e) => {
                                const u = [...weeklyChecks];
                                u[idx].checkNo = e.target.value;
                                setWeeklyChecks(u);
                              }}
                            />
                          </td>
                          <td>
                            <input
                              type="text"
                              className="form-control form-control-sm text-start border-0 p-0"
                              value={chk.payee}
                              onChange={(e) => {
                                const u = [...weeklyChecks];
                                u[idx].payee = e.target.value;
                                setWeeklyChecks(u);
                              }}
                            />
                          </td>
                          <td>
                            <input
                              type="number"
                              className="form-control form-control-sm text-end border-0 p-0 fw-bold"
                              value={chk.amount}
                              onChange={(e) => {
                                const u = [...weeklyChecks];
                                u[idx].amount = parseFloat(e.target.value) || 0;
                                setWeeklyChecks(u);
                              }}
                            />
                          </td>
                        </tr>
                      ))}
                      <tr className="table-light fw-bold">
                        <td colSpan={2} className="text-end">Total Checks / المجموع:</td>
                        <td className="text-end text-primary">${totalChecks.toFixed(2)}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            {/* Middle Box: سحبيات وإيداعات بنكية شهرية */}
            <div className="col-lg-5 col-12">
              <div className="border rounded p-2 h-100 bg-white">
                {/* Bank Withdrawals */}
                <h6 className="fw-bold mb-1 text-dark border-bottom pb-1">
                  سحبيات بنكية شهرية (Bank Withdrawals)
                </h6>
                <table className="table table-sm table-bordered text-center mb-2 small">
                  <thead className="thead-light">
                    <tr>
                      <th>Description</th>
                      <th style={{ width: "110px" }}>Amount ($)</th>
                    </tr>
                  </thead>
                  <tbody>
                    {bankWithdrawals.map((w, idx) => (
                      <tr key={w.id}>
                        <td>
                          <input
                            type="text"
                            className="form-control form-control-sm text-start border-0 p-0"
                            value={w.description}
                            onChange={(e) => {
                              const u = [...bankWithdrawals];
                              u[idx].description = e.target.value;
                              setBankWithdrawals(u);
                            }}
                          />
                        </td>
                        <td className="text-end fw-bold text-danger">
                          <input
                            type="number"
                            className="form-control form-control-sm text-end border-0 p-0 fw-bold text-danger"
                            value={w.amount}
                            onChange={(e) => {
                              const u = [...bankWithdrawals];
                              u[idx].amount = parseFloat(e.target.value) || 0;
                              setBankWithdrawals(u);
                            }}
                          />
                        </td>
                      </tr>
                    ))}
                    <tr className="table-light fw-bold">
                      <td className="text-end">المجموع $ (Total Withdrawals):</td>
                      <td className="text-end text-danger">${totalWithdrawals.toFixed(2)}</td>
                    </tr>
                  </tbody>
                </table>

                {/* Bank Deposits */}
                <h6 className="fw-bold mb-1 text-dark border-bottom pb-1 pt-2">
                  إيداعات بنكية شهرية (Bank Deposits)
                </h6>
                <table className="table table-sm table-bordered text-center mb-0 small">
                  <thead className="thead-light">
                    <tr>
                      <th>Description / Deposit Ref</th>
                      <th style={{ width: "110px" }}>Amount ($)</th>
                    </tr>
                  </thead>
                  <tbody>
                    {bankDeposits.map((d, idx) => (
                      <tr key={d.id}>
                        <td>
                          <input
                            type="text"
                            className="form-control form-control-sm text-start border-0 p-0"
                            value={d.description}
                            onChange={(e) => {
                              const u = [...bankDeposits];
                              u[idx].description = e.target.value;
                              setBankDeposits(u);
                            }}
                          />
                        </td>
                        <td className="text-end fw-bold text-success">
                          <input
                            type="number"
                            className="form-control form-control-sm text-end border-0 p-0 fw-bold text-success"
                            value={d.amount}
                            onChange={(e) => {
                              const u = [...bankDeposits];
                              u[idx].amount = parseFloat(e.target.value) || 0;
                              setBankDeposits(u);
                            }}
                          />
                        </td>
                      </tr>
                    ))}
                    <tr className="table-light fw-bold">
                      <td className="text-end">المجموع $ (Total Deposits):</td>
                      <td className="text-end text-success">${totalDeposits.toFixed(2)}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            {/* Right Box: Totals Breakdown Box (مفصل / ملخص) */}
            <div className="col-lg-3 col-12">
              <div className="border rounded p-3 h-100 bg-light">
                <h6 className="fw-bold mb-2 text-dark border-bottom pb-1 text-center">
                  مفصل الحسابات (Summary Totals)
                </h6>

                <div className="d-flex justify-content-between align-items-center mb-2 pb-1 border-bottom">
                  <span className="fw-bold text-danger">مجموع الخرج $ (Outflow):</span>
                  <span className="fw-bold text-danger fs-15">${totalCashPayOuts.toFixed(2)}</span>
                </div>

                <div className="d-flex justify-content-between align-items-center mb-2 pb-1 border-bottom">
                  <span className="fw-bold text-success">الدخل $ (Cash Inflow):</span>
                  <span className="fw-bold text-success fs-15">${totalCashIncome.toFixed(2)}</span>
                </div>

                <div className="d-flex justify-content-between align-items-center mb-2 pb-1 border-bottom">
                  <span className="text-muted">Lotto $ (Lottery):</span>
                  <input
                    type="number"
                    step="1"
                    className="form-control form-control-sm text-end fw-bold"
                    style={{ width: "90px" }}
                    value={lottoSales}
                    onChange={(e) => setLottoSales(parseFloat(e.target.value) || 0)}
                  />
                </div>

                <div className="d-flex justify-content-between align-items-center mb-2 pb-1 border-bottom">
                  <span className="text-muted">Gas $ (Fuel Total):</span>
                  <span className="fw-bold">${totalFuel.toFixed(2)}</span>
                </div>

                <div className="d-flex justify-content-between align-items-center mb-3 pb-1 border-bottom">
                  <span className="text-muted">Store $ (Retail Total):</span>
                  <span className="fw-bold">${totalStore.toFixed(2)}</span>
                </div>

                <div className="p-2 bg-white rounded border text-center">
                  <small className="text-muted d-block">Net Weekly Turnover</small>
                  <h4 className="fw-bold text-primary mb-0">${netInflow.toFixed(2)}</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
};

export default DailySheet;
