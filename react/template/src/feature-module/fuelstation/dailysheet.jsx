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
  FileText,
  Edit3,
  X
} from "react-feather";
import { getCurrentUser, ROLES } from "../../core/auth";

const MySwal = withReactContent(Swal);

// Days of the week as printed on the physical sheet
const DAYS_OF_WEEK = [
  { key: "monday", name: "Monday", dayIndex: 1 },
  { key: "tuesday", name: "Tuesday", dayIndex: 2 },
  { key: "wednesday", name: "Wednesday", dayIndex: 3 },
  { key: "thursday", name: "Thursday", dayIndex: 4 },
  { key: "friday", name: "Friday", dayIndex: 5 },
  { key: "saturday", name: "Saturday", dayIndex: 6 },
  { key: "sunday", name: "Sunday", dayIndex: 0 },
];

const STORES = [
  { id: "STORE-101", name: "Store #101 - Main Highway & Fuel Station" },
  { id: "STORE-102", name: "Store #102 - Downtown Convenience & Gas" },
  { id: "STORE-103", name: "Store #103 - North Express Station" },
];

const DailySheet = () => {
  const location = useLocation();
  const currentUser = getCurrentUser();

  // Strict role determination: Cashier cannot access Admin view, Admin has audit view
  const isCashier = currentUser?.role === ROLES.CASHIER;
  const viewMode = isCashier ? "cashier" : "admin";

  // Current Week State (Week 1 - 52)
  const [currentWeekNum, setCurrentWeekNum] = useState(38); // Week 38 (Current)
  const [selectedStore, setSelectedStore] = useState(currentUser?.storeId || STORES[0].id);

  // Today determination (Friday = dayIndex 5)
  const todayDate = new Date();
  const currentDayOfWeek = todayDate.getDay(); // 0=Sun, 1=Mon, ..., 5=Fri, 6=Sat

  // Compute dates for the selected week
  const getWeekDates = (weekNum) => {
    // Anchor year 2026: Sep 14 - Sep 20 is Week 38
    const baseDate = new Date(2026, 8, 14 + (weekNum - 38) * 7);
    return DAYS_OF_WEEK.map((day, idx) => {
      const d = new Date(baseDate);
      d.setDate(baseDate.getDate() + idx);
      const iso = d.toISOString().split("T")[0];
      return {
        ...day,
        date: iso,
        // Upcoming future day relative to today in the current week
        isFuture: weekNum > 38 || (weekNum === 38 && (day.dayIndex > currentDayOfWeek && currentDayOfWeek !== 0)),
        isToday: weekNum === 38 && (day.dayIndex === currentDayOfWeek || (currentDayOfWeek === 0 && day.dayIndex === 0)),
      };
    });
  };

  const [daysData, setDaysData] = useState([]);

  // Daily Closing Form Modal State
  const [showClosingModal, setShowClosingModal] = useState(false);
  const [closingForm, setClosingForm] = useState({
    dayKey: "friday",
    fuel: "",
    store: "",
    cCards: "",
    tax: "",
    storeCash: "",
    fuelCash: "",
    payOuts: "",
    notes: "",
  });

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

    // Default realistic sample data matching user's sheet
    const initialDays = weekDays.map((d, i) => {
      const isPast = !d.isFuture && !d.isToday;
      const isToday = d.isToday;

      return {
        key: d.key,
        dayName: d.name,
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

  // Open Daily Closing Modal prefilled for selected day
  const handleOpenClosingModal = () => {
    const todayRow = daysData.find((d) => d.isToday) || daysData[0] || {};
    setClosingForm({
      dayKey: todayRow.key || "friday",
      fuel: todayRow.fuel || "",
      store: todayRow.store || "",
      cCards: todayRow.cCards || "",
      tax: todayRow.tax || "",
      storeCash: todayRow.storeCash || "",
      fuelCash: todayRow.fuelCash || "",
      payOuts: todayRow.payOuts || "",
      notes: todayRow.notes || "",
    });
    setShowClosingModal(true);
  };

  // Handle Daily Closing Modal Submission
  const handleClosingSubmit = (e) => {
    e.preventDefault();
    const targetIndex = daysData.findIndex((d) => d.key === closingForm.dayKey);
    if (targetIndex === -1) return;

    const updated = [...daysData];
    updated[targetIndex] = {
      ...updated[targetIndex],
      fuel: parseFloat(closingForm.fuel) || 0,
      store: parseFloat(closingForm.store) || 0,
      cCards: parseFloat(closingForm.cCards) || 0,
      tax: parseFloat(closingForm.tax) || 0,
      storeCash: parseFloat(closingForm.storeCash) || 0,
      fuelCash: parseFloat(closingForm.fuelCash) || 0,
      payOuts: parseFloat(closingForm.payOuts) || 0,
      notes: closingForm.notes || "",
      cashierName: currentUser?.name || "Cashier Station #1",
      storeName: currentUser?.storeName || "Store #101",
    };

    setDaysData(updated);

    // Save directly to localStorage
    const weekKey = `sheet_${selectedStore}_w${currentWeekNum}`;
    const payload = {
      weekNum: currentWeekNum,
      storeId: selectedStore,
      days: updated,
      checks: weeklyChecks,
      withdrawals: bankWithdrawals,
      deposits: bankDeposits,
      lotto: lottoSales,
      updatedAt: new Date().toISOString(),
      updatedBy: currentUser?.name || "Cashier",
    };
    localStorage.setItem(weekKey, JSON.stringify(payload));

    setShowClosingModal(false);

    MySwal.fire({
      icon: "success",
      title: "Daily Closing Form Submitted!",
      text: `Daily shift reconciliation for ${updated[targetIndex].dayName} has been saved and reflected on the weekly sheet.`,
      confirmButtonColor: "#ff9f43",
    });
  };

  // Calculate Column Totals
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
  const totalCashIncome = totalStoreCash + totalFuelCash;
  const totalCashPayOuts = totalPayOuts;
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
      updatedBy: currentUser?.name || "Cashier",
    };
    localStorage.setItem(weekKey, JSON.stringify(payload));

    MySwal.fire({
      icon: "success",
      title: "Weekly Sheet Saved!",
      text: `Week #${currentWeekNum} sheet successfully reconciled and stored.`,
      confirmButtonColor: "#ff9f43",
    });
  };

  // Auto-fill Today from POS simulation
  const handleAutoFillToday = () => {
    const todayIndex = daysData.findIndex((d) => d.isToday);
    if (todayIndex === -1) {
      MySwal.fire({
        icon: "info",
        title: "Upcoming Week",
        text: "Today is not within this historical week view.",
      });
      return;
    }

    const updated = [...daysData];
    updated[todayIndex] = {
      ...updated[todayIndex],
      fuel: 3240.0,
      store: 1120.5,
      cCards: 2680.0,
      tax: 218.0,
      storeCash: 580.0,
      fuelCash: 1102.5,
      payOuts: 0,
      notes: "Auto-synced from Forecourt POS register #1",
      cashierName: currentUser?.name || "Cashier Station #1",
      storeName: currentUser?.storeName || "Store #101",
    };
    setDaysData(updated);

    MySwal.fire({
      icon: "success",
      title: "Synced from POS!",
      text: "Today's shift register sales have been populated into the sheet.",
      timer: 2000,
    });
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
              <FileText className="text-primary" />
              {isCashier
                ? "Daily Cashier Shift Sheet"
                : "Weekly Reconciliation & Cashier Audit Sheet"}
            </h4>
            <span className="text-muted small">
              {isCashier
                ? `Assigned Store: ${currentUser?.storeName || "Store #101"} | Cashier: ${currentUser?.name || "Station #1"}`
                : "Store & Fuel Station Financial Reconciliation System"}
            </span>
          </div>

          <div className="d-flex flex-wrap align-items-center gap-2">
            {/* Cashier Closing Form Button */}
            {isCashier && (
              <>
                <button
                  type="button"
                  className="btn btn-sm btn-primary d-flex align-items-center gap-1 fw-bold shadow-sm"
                  onClick={handleOpenClosingModal}
                >
                  <Edit3 size={15} /> Submit Daily Closing Form
                </button>
                <button
                  type="button"
                  className="btn btn-sm btn-outline-success d-flex align-items-center gap-1"
                  onClick={handleAutoFillToday}
                >
                  <RefreshCw size={14} /> Auto-fill from POS
                </button>
              </>
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

        {/* Admin Filters & Week Slider Bar (Admin only) */}
        {!isCashier && (
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
                      <Sliders size={14} /> Navigate Weeks (Week 1 - 52 Slider)
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
        <div
          className="card shadow-sm border-0"
          style={{
            backgroundColor: "#fff",
            fontFamily: "'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif",
          }}
        >
          {/* Physical Header Matching Uploaded Accounting Sheet */}
          <div className="card-header bg-white border-bottom pb-2 pt-3">
            <div className="d-flex justify-content-between align-items-center">
              <div>
                <h5 className="fw-bold mb-0 text-dark">
                  WEEKLY CASHIER SUMMARY & RECONCILIATION
                </h5>
                <span className="text-muted small">
                  {isCashier
                    ? `${currentUser?.storeName || "Store #101"} | Week ${currentWeekNum}`
                    : `${STORES.find((s) => s.id === selectedStore)?.name} | Week ${currentWeekNum} of 52`}
                </span>
              </div>
              <div className="text-end small">
                <span className="badge bg-light text-dark border me-2">
                  <Calendar size={12} className="me-1" /> Mon - Sun Accounting Cycle
                </span>
                <span className="badge bg-success">
                  <CheckCircle size={12} className="me-1" /> Audited
                </span>
              </div>
            </div>
          </div>

          <div className="card-body p-2 p-md-3">
            {/* Top Main Table: Days of the Week */}
            <div className="table-responsive">
              <table
                className="table table-bordered table-sm align-middle text-center mb-4"
                style={{ fontSize: "12px" }}
              >
                <thead
                  style={{
                    backgroundColor: "#e2e8f0",
                    color: "#1e293b",
                    fontWeight: "bold",
                    verticalAlign: "middle",
                  }}
                >
                  <tr>
                    <th style={{ width: "95px" }}>Day</th>
                    {!isCashier && (
                      <>
                        <th style={{ width: "110px" }}>Cashier Name</th>
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
                    <th style={{ minWidth: "150px" }}>Notes / Payee Reference</th>
                  </tr>
                </thead>
                <tbody>
                  {daysData.map((row, index) => {
                    const rowTotalSales =
                      (parseFloat(row.fuel) || 0) + (parseFloat(row.store) || 0) + (parseFloat(row.tax) || 0);

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
                          {isToday && <span className="badge bg-warning text-dark d-block mt-1">Today</span>}
                          {isUpcoming && (
                            <span className="badge bg-secondary d-block mt-1">
                              <Lock size={10} /> Upcoming
                            </span>
                          )}
                        </td>

                        {/* Extended Admin Columns */}
                        {!isCashier && (
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
                            disabled={isUpcoming && isCashier}
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
                            disabled={isUpcoming && isCashier}
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
                            disabled={isUpcoming && isCashier}
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
                            disabled={isUpcoming && isCashier}
                            className={`form-control form-control-sm text-center ${
                              isUpcoming ? "bg-light text-muted border-0" : ""
                            }`}
                            value={row.tax || ""}
                            placeholder={isUpcoming ? "-" : "0.00"}
                            onChange={(e) => handleInputChange(index, "tax", e.target.value)}
                          />
                        </td>

                        {/* Total Sales ($) - Calculated */}
                        <td className="fw-bold bg-light text-primary">
                          ${rowTotalSales.toFixed(2)}
                        </td>

                        {/* Store Cash ($) */}
                        <td>
                          <input
                            type="number"
                            step="0.1"
                            disabled={isUpcoming && isCashier}
                            className={`form-control form-control-sm text-center text-success fw-bold ${
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
                            disabled={isUpcoming && isCashier}
                            className={`form-control form-control-sm text-center text-success fw-bold ${
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
                            disabled={isUpcoming && isCashier}
                            className={`form-control form-control-sm text-center text-danger fw-bold ${
                              isUpcoming ? "bg-light text-muted border-0" : ""
                            }`}
                            value={row.payOuts || ""}
                            placeholder={isUpcoming ? "-" : "0.00"}
                            onChange={(e) => handleInputChange(index, "payOuts", e.target.value)}
                          />
                        </td>

                        {/* Notes */}
                        <td>
                          <input
                            type="text"
                            disabled={isUpcoming && isCashier}
                            className={`form-control form-control-sm ${
                              isUpcoming ? "bg-light text-muted border-0" : ""
                            }`}
                            value={row.notes || ""}
                            placeholder={isUpcoming ? "Locked" : "Shift notes / recipient"}
                            onChange={(e) => handleInputChange(index, "notes", e.target.value)}
                          />
                        </td>
                      </tr>
                    );
                  })}

                  {/* Summary / Total Row */}
                  <tr
                    style={{
                      backgroundColor: "#f8fafc",
                      borderTop: "2px solid #334155",
                      fontWeight: "bold",
                    }}
                  >
                    <td>TOTAL ($)</td>
                    {!isCashier && <td colSpan={2}></td>}
                    <td></td>
                    <td className="text-primary">${totalFuel.toFixed(2)}</td>
                    <td className="text-primary">${totalStore.toFixed(2)}</td>
                    <td className="text-primary">${totalCCards.toFixed(2)}</td>
                    <td className="text-primary">${totalTax.toFixed(2)}</td>
                    <td className="bg-primary text-white fs-14">
                      ${totalSalesAllDays.toFixed(2)}
                    </td>
                    <td className="text-success">${totalStoreCash.toFixed(2)}</td>
                    <td className="text-success">${totalFuelCash.toFixed(2)}</td>
                    <td className="text-danger fs-14">${totalPayOuts.toFixed(2)}</td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
            </div>

            {/* Bottom Accounting Grid (Matching Physical Accounting Sheet) */}
            <div className="row g-3 mt-1">
              {/* Left Box: Weekly Checks Table */}
              <div className="col-lg-5 col-md-6 col-12">
                <div className="border rounded p-2 h-100 bg-light">
                  <div className="d-flex justify-content-between align-items-center mb-2 pb-1 border-bottom">
                    <h6 className="fw-bold mb-0 text-dark">
                      Weekly Supplier Checks Issued
                    </h6>
                    <button
                      type="button"
                      className="btn btn-xs btn-outline-primary py-0 px-1 d-print-none"
                      onClick={() => {
                        setWeeklyChecks([
                          ...weeklyChecks,
                          { id: Date.now(), checkNo: `CHK-${Math.floor(1000 + Math.random() * 9000)}`, payee: "", amount: 0.0 }
                        ]);
                      }}
                    >
                      <Plus size={12} /> Add Check
                    </button>
                  </div>
                  <table className="table table-sm table-bordered text-center mb-0 small">
                    <thead className="thead-light">
                      <tr>
                        <th style={{ width: "90px" }}>Check #</th>
                        <th>Payee Name / Company</th>
                        <th style={{ width: "100px" }}>Amount ($)</th>
                        <th style={{ width: "35px" }} className="d-print-none"></th>
                      </tr>
                    </thead>
                    <tbody>
                      {weeklyChecks.map((c, idx) => (
                        <tr key={c.id}>
                          <td>
                            <input
                              type="text"
                              className="form-control form-control-sm text-center border-0 p-0"
                              value={c.checkNo}
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
                              className="form-control form-control-sm border-0 p-0 text-start"
                              value={c.payee}
                              onChange={(e) => {
                                const u = [...weeklyChecks];
                                u[idx].payee = e.target.value;
                                setWeeklyChecks(u);
                              }}
                            />
                          </td>
                          <td className="text-end fw-bold">
                            <input
                              type="number"
                              className="form-control form-control-sm text-end border-0 p-0 fw-bold"
                              value={c.amount}
                              onChange={(e) => {
                                const u = [...weeklyChecks];
                                u[idx].amount = parseFloat(e.target.value) || 0;
                                setWeeklyChecks(u);
                              }}
                            />
                          </td>
                          <td className="d-print-none">
                            <Trash2
                              size={12}
                              className="text-danger cursor-pointer"
                              style={{ cursor: "pointer" }}
                              onClick={() => {
                                setWeeklyChecks(weeklyChecks.filter((item) => item.id !== c.id));
                              }}
                            />
                          </td>
                        </tr>
                      ))}
                      <tr className="table-light fw-bold">
                        <td colSpan={2} className="text-end">Total Checks ($):</td>
                        <td className="text-end text-primary">${totalChecks.toFixed(2)}</td>
                        <td className="d-print-none"></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>

              {/* Middle Box: Bank Withdrawals & Deposits */}
              <div className="col-lg-4 col-md-6 col-12">
                <div className="border rounded p-2 h-100 bg-light">
                  {/* Bank Withdrawals */}
                  <h6 className="fw-bold mb-1 text-dark border-bottom pb-1">
                    Bank Withdrawals & Expenses
                  </h6>
                  <table className="table table-sm table-bordered text-center mb-3 small">
                    <thead className="thead-light">
                      <tr>
                        <th>Description / Expense</th>
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
                        <td className="text-end">Total Withdrawals ($):</td>
                        <td className="text-end text-danger">${totalWithdrawals.toFixed(2)}</td>
                      </tr>
                    </tbody>
                  </table>

                  {/* Bank Deposits */}
                  <h6 className="fw-bold mb-1 text-dark border-bottom pb-1 pt-2">
                    Bank Deposits & Armored Drops
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
                        <td className="text-end">Total Deposits ($):</td>
                        <td className="text-end text-success">${totalDeposits.toFixed(2)}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>

              {/* Right Box: Reconciliation Summary Totals */}
              <div className="col-lg-3 col-12">
                <div className="border rounded p-3 h-100 bg-light">
                  <h6 className="fw-bold mb-2 text-dark border-bottom pb-1 text-center">
                    Reconciliation Summary Totals
                  </h6>

                  <div className="d-flex justify-content-between align-items-center mb-2 pb-1 border-bottom">
                    <span className="fw-bold text-danger">Cash Pay Outs:</span>
                    <span className="fw-bold text-danger fs-15">${totalCashPayOuts.toFixed(2)}</span>
                  </div>

                  <div className="d-flex justify-content-between align-items-center mb-2 pb-1 border-bottom">
                    <span className="fw-bold text-success">Cash Inflow (Store + Fuel):</span>
                    <span className="fw-bold text-success fs-15">${totalCashIncome.toFixed(2)}</span>
                  </div>

                  <div className="d-flex justify-content-between align-items-center mb-2 pb-1 border-bottom">
                    <span className="text-muted">Lotto Sales ($):</span>
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
                    <span className="text-muted">Fuel Sales Total:</span>
                    <span className="fw-bold">${totalFuel.toFixed(2)}</span>
                  </div>

                  <div className="d-flex justify-content-between align-items-center mb-3 pb-1 border-bottom">
                    <span className="text-muted">Store Sales Total:</span>
                    <span className="fw-bold">${totalStore.toFixed(2)}</span>
                  </div>

                  <div className="p-2 bg-white rounded border text-center">
                    <small className="text-muted d-block">Net Weekly Sales Volume</small>
                    <h4 className="fw-bold text-primary mb-0">${netInflow.toFixed(2)}</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        {/* Daily Shift Closing Modal for Cashiers */}
        {showClosingModal && (
          <div
            className="modal fade show d-block"
            tabIndex="-1"
            role="dialog"
            style={{ backgroundColor: "rgba(15, 23, 42, 0.65)", zIndex: 1050 }}
          >
            <div className="modal-dialog modal-dialog-centered modal-lg" role="document">
              <div className="modal-content shadow-lg border-0">
                <div className="modal-header bg-primary text-white py-3">
                  <h5 className="modal-title fw-bold text-white d-flex align-items-center gap-2">
                    <Edit3 size={18} /> Submit Daily Shift Closing Form
                  </h5>
                  <button
                    type="button"
                    className="btn-close btn-close-white"
                    onClick={() => setShowClosingModal(false)}
                    aria-label="Close"
                  ></button>
                </div>

                <form onSubmit={handleClosingSubmit}>
                  <div className="modal-body p-4">
                    <div className="alert alert-primary py-2 px-3 mb-3 d-flex justify-content-between align-items-center">
                      <div>
                        <strong>Cashier:</strong> {currentUser?.name || "Cashier Station #1"}
                        <span className="mx-2">|</span>
                        <strong>Location:</strong> {currentUser?.storeName || "Store #101"}
                      </div>
                      <span className="badge bg-primary">Active Shift Close</span>
                    </div>

                    <div className="row g-3 mb-3">
                      {/* Select Day */}
                      <div className="col-md-6">
                        <label className="form-label small fw-bold">Select Day of Week</label>
                        <select
                          className="form-select"
                          value={closingForm.dayKey}
                          onChange={(e) => {
                            const dKey = e.target.value;
                            const dRow = daysData.find((d) => d.key === dKey) || {};
                            setClosingForm({
                              ...closingForm,
                              dayKey: dKey,
                              fuel: dRow.fuel || "",
                              store: dRow.store || "",
                              cCards: dRow.cCards || "",
                              tax: dRow.tax || "",
                              storeCash: dRow.storeCash || "",
                              fuelCash: dRow.fuelCash || "",
                              payOuts: dRow.payOuts || "",
                              notes: dRow.notes || "",
                            });
                          }}
                        >
                          {daysData.map((d) => (
                            <option key={d.key} value={d.key} disabled={d.isFuture}>
                              {d.dayName} ({d.date}) {d.isToday ? "— Today" : d.isFuture ? "— Locked (Upcoming)" : ""}
                            </option>
                          ))}
                        </select>
                      </div>

                      {/* Shift Notes */}
                      <div className="col-md-6">
                        <label className="form-label small fw-bold">Shift Notes / Register ID</label>
                        <input
                          type="text"
                          className="form-control"
                          placeholder="e.g. Morning Shift #1 balanced, drawer reconciled"
                          value={closingForm.notes}
                          onChange={(e) => setClosingForm({ ...closingForm, notes: e.target.value })}
                        />
                      </div>
                    </div>

                    <h6 className="fw-bold border-bottom pb-1 text-dark mb-3">
                      Register & Sales Entries
                    </h6>

                    <div className="row g-3">
                      <div className="col-md-3 col-6">
                        <label className="form-label small fw-bold">Fuel Sales ($)</label>
                        <input
                          type="number"
                          step="0.01"
                          required
                          className="form-control fw-bold"
                          placeholder="0.00"
                          value={closingForm.fuel}
                          onChange={(e) => setClosingForm({ ...closingForm, fuel: e.target.value })}
                        />
                      </div>
                      <div className="col-md-3 col-6">
                        <label className="form-label small fw-bold">Store Sales ($)</label>
                        <input
                          type="number"
                          step="0.01"
                          required
                          className="form-control fw-bold"
                          placeholder="0.00"
                          value={closingForm.store}
                          onChange={(e) => setClosingForm({ ...closingForm, store: e.target.value })}
                        />
                      </div>
                      <div className="col-md-3 col-6">
                        <label className="form-label small fw-bold">Credit Cards ($)</label>
                        <input
                          type="number"
                          step="0.01"
                          className="form-control fw-bold"
                          placeholder="0.00"
                          value={closingForm.cCards}
                          onChange={(e) => setClosingForm({ ...closingForm, cCards: e.target.value })}
                        />
                      </div>
                      <div className="col-md-3 col-6">
                        <label className="form-label small fw-bold">Sales Tax ($)</label>
                        <input
                          type="number"
                          step="0.01"
                          className="form-control fw-bold"
                          placeholder="0.00"
                          value={closingForm.tax}
                          onChange={(e) => setClosingForm({ ...closingForm, tax: e.target.value })}
                        />
                      </div>

                      <div className="col-md-4 col-6">
                        <label className="form-label small fw-bold text-success">Store Cash ($)</label>
                        <input
                          type="number"
                          step="0.01"
                          className="form-control text-success fw-bold"
                          placeholder="0.00"
                          value={closingForm.storeCash}
                          onChange={(e) => setClosingForm({ ...closingForm, storeCash: e.target.value })}
                        />
                      </div>
                      <div className="col-md-4 col-6">
                        <label className="form-label small fw-bold text-success">Fuel Cash ($)</label>
                        <input
                          type="number"
                          step="0.01"
                          className="form-control text-success fw-bold"
                          placeholder="0.00"
                          value={closingForm.fuelCash}
                          onChange={(e) => setClosingForm({ ...closingForm, fuelCash: e.target.value })}
                        />
                      </div>
                      <div className="col-md-4 col-12">
                        <label className="form-label small fw-bold text-danger">Pay Outs ($)</label>
                        <input
                          type="number"
                          step="0.01"
                          className="form-control text-danger fw-bold"
                          placeholder="0.00"
                          value={closingForm.payOuts}
                          onChange={(e) => setClosingForm({ ...closingForm, payOuts: e.target.value })}
                        />
                      </div>
                    </div>

                    {/* Calculated Summary Preview */}
                    <div className="row g-2 mt-3 p-3 bg-light rounded border">
                      <div className="col-md-4 text-center">
                        <small className="text-muted d-block">Gross Sales (Fuel+Store+Tax)</small>
                        <strong className="text-primary fs-16">
                          $
                          {(
                            (parseFloat(closingForm.fuel) || 0) +
                            (parseFloat(closingForm.store) || 0) +
                            (parseFloat(closingForm.tax) || 0)
                          ).toFixed(2)}
                        </strong>
                      </div>
                      <div className="col-md-4 text-center border-start">
                        <small className="text-muted d-block">Cash Collected (Store+Fuel)</small>
                        <strong className="text-success fs-16">
                          $
                          {(
                            (parseFloat(closingForm.storeCash) || 0) +
                            (parseFloat(closingForm.fuelCash) || 0)
                          ).toFixed(2)}
                        </strong>
                      </div>
                      <div className="col-md-4 text-center border-start">
                        <small className="text-muted d-block">Net Cash Drop (Cash - Payouts)</small>
                        <strong className="text-dark fs-16">
                          $
                          {(
                            (parseFloat(closingForm.storeCash) || 0) +
                            (parseFloat(closingForm.fuelCash) || 0) -
                            (parseFloat(closingForm.payOuts) || 0)
                          ).toFixed(2)}
                        </strong>
                      </div>
                    </div>
                  </div>

                  <div className="modal-footer bg-light py-2">
                    <button
                      type="button"
                      className="btn btn-secondary btn-sm"
                      onClick={() => setShowClosingModal(false)}
                    >
                      Cancel
                    </button>
                    <button type="submit" className="btn btn-primary btn-sm fw-bold">
                      <Save size={14} className="me-1" /> Submit & Update Weekly Sheet
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        )}
      </div>
    </div>
  );
};

export default DailySheet;
