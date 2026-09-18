import React, { useState, useEffect } from "react";
import { Link } from "react-router-dom";
import Swal from "sweetalert2";
import withReactContent from "sweetalert2-react-content";
import { Droplet, Zap, AlertTriangle, RefreshCw, CheckCircle, Sliders, DollarSign, Activity } from "react-feather";

const MySwal = withReactContent(Swal);

const FuelDashboard = () => {
  // Fuel Prices State
  const [fuelPrices, setFuelPrices] = useState({
    gasoline91: 2.18,
    gasoline95: 2.33,
    diesel: 1.15,
  });

  // Underground Tanks State
  const [tanks, setTanks] = useState([
    {
      id: "TANK-01",
      name: "Tank 1 - Unleaded 91",
      fuelType: "Gasoline 91",
      capacity: 50000,
      currentVolume: 34500,
      waterLevelMm: 12,
      temperatureC: 24.2,
      color: "bg-success",
      badgeColor: "badge-linesuccess",
    },
    {
      id: "TANK-02",
      name: "Tank 2 - Super 95",
      fuelType: "Gasoline 95",
      capacity: 40000,
      currentVolume: 28200,
      waterLevelMm: 8,
      temperatureC: 23.8,
      color: "bg-primary",
      badgeColor: "badge-lineprimary",
    },
    {
      id: "TANK-03",
      name: "Tank 3 - Low Sulfur Diesel",
      fuelType: "Diesel",
      capacity: 30000,
      currentVolume: 19800,
      waterLevelMm: 15,
      temperatureC: 22.5,
      color: "bg-warning",
      badgeColor: "badge-linewarning",
    },
  ]);

  // Live Pumps / Dispensers
  const [pumps, setPumps] = useState([
    { id: 1, island: "Island 1", status: "Dispensing", grade: "Gasoline 95", currentLiters: 24.5, currentAmount: 57.08, flowRate: "28 L/min" },
    { id: 2, island: "Island 1", status: "Idle", grade: "Gasoline 91", currentLiters: 0, currentAmount: 0.00, flowRate: "0 L/min" },
    { id: 3, island: "Island 2", status: "Dispensing", grade: "Gasoline 91", currentLiters: 38.2, currentAmount: 83.27, flowRate: "32 L/min" },
    { id: 4, island: "Island 2", status: "Authorized", grade: "Diesel", currentLiters: 12.0, currentAmount: 13.80, flowRate: "20 L/min" },
    { id: 5, island: "Island 3", status: "Idle", grade: "Gasoline 95", currentLiters: 0, currentAmount: 0.00, flowRate: "0 L/min" },
    { id: 6, island: "Island 3", status: "Idle", grade: "Diesel", currentLiters: 0, currentAmount: 0.00, flowRate: "0 L/min" },
    { id: 7, island: "Island 4", status: "Dispensing", grade: "Gasoline 95", currentLiters: 18.7, currentAmount: 43.57, flowRate: "30 L/min" },
    { id: 8, island: "Island 4", status: "Maintenance", grade: "Gasoline 91", currentLiters: 0, currentAmount: 0.00, flowRate: "0 L/min" },
  ]);

  // Recent Fuel Transactions
  const [transactions, setTransactions] = useState([
    { id: "TXN-8821", time: "18:04", pump: "Pump 3", grade: "Gasoline 91", liters: 42.15, total: 91.89, payment: "Card / Mada", cashier: "Cashier Station 1" },
    { id: "TXN-8820", time: "17:58", pump: "Pump 1", grade: "Gasoline 95", liters: 35.00, total: 81.55, payment: "Cash", cashier: "Cashier Station 1" },
    { id: "TXN-8819", time: "17:52", pump: "Pump 4", grade: "Diesel", liters: 65.40, total: 75.21, payment: "Card / Mada", cashier: "Cashier Station 2" },
    { id: "TXN-8818", time: "17:45", pump: "Pump 7", grade: "Gasoline 95", liters: 28.30, total: 65.94, payment: "Apple Pay", cashier: "Cashier Station 1" },
    { id: "TXN-8817", time: "17:39", pump: "Pump 2", grade: "Gasoline 91", liters: 50.00, total: 109.00, payment: "Cash", cashier: "Cashier Station 2" },
  ]);

  // Price Modal State
  const [showPriceModal, setShowPriceModal] = useState(false);
  const [tempPrices, setTempPrices] = useState({ ...fuelPrices });

  // Simulate pump live flow
  useEffect(() => {
    const interval = setInterval(() => {
      setPumps((prevPumps) =>
        prevPumps.map((pump) => {
          if (pump.status === "Dispensing") {
            const addedLiters = parseFloat((Math.random() * 0.4 + 0.1).toFixed(2));
            const newLiters = parseFloat((pump.currentLiters + addedLiters).toFixed(2));
            const price = pump.grade.includes("95")
              ? fuelPrices.gasoline95
              : pump.grade.includes("91")
              ? fuelPrices.gasoline91
              : fuelPrices.diesel;
            const newAmount = parseFloat((newLiters * price).toFixed(2));
            return {
              ...pump,
              currentLiters: newLiters,
              currentAmount: newAmount,
            };
          }
          return pump;
        })
      );
    }, 2500);

    return () => clearInterval(interval);
  }, [fuelPrices]);

  const handleUpdatePrices = () => {
    setFuelPrices({ ...tempPrices });
    setShowPriceModal(false);
    MySwal.fire({
      icon: "success",
      title: "Fuel Prices Updated!",
      text: "New pump unit prices have been broadcast to all 8 dispensers.",
      timer: 2000,
      showConfirmButton: false,
    });
  };

  const togglePumpStatus = (pumpId) => {
    setPumps((prev) =>
      prev.map((p) => {
        if (p.id === pumpId) {
          if (p.status === "Idle") {
            return { ...p, status: "Dispensing", currentLiters: 1.2, currentAmount: 2.62 };
          } else if (p.status === "Dispensing") {
            return { ...p, status: "Idle", currentLiters: 0, currentAmount: 0 };
          }
        }
        return p;
      })
    );
  };

  const emergencyStopAll = () => {
    MySwal.fire({
      title: "Emergency Stop All Dispensers?",
      text: "This will immediately cease fuel delivery on all active nozzles.",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#d33",
      cancelButtonColor: "#3085d6",
      confirmButtonText: "Yes, STOP ALL PUMPS",
    }).then((result) => {
      if (result.isConfirmed) {
        setPumps((prev) => prev.map((p) => ({ ...p, status: p.status === "Maintenance" ? p.status : "Idle", currentLiters: 0, currentAmount: 0 })));
        MySwal.fire("Stopped!", "All fuel dispensers are now in IDLE mode.", "success");
      }
    });
  };

  const totalFuelVolume = tanks.reduce((acc, t) => acc + t.currentVolume, 0);
  const totalTankCapacity = tanks.reduce((acc, t) => acc + t.capacity, 0);
  const overallCapacityPct = Math.round((totalFuelVolume / totalTankCapacity) * 100);

  return (
    <div className="page-wrapper">
      <div className="content">
        <div className="page-header d-flex align-items-center justify-content-between">
          <div className="page-title">
            <h4>Fuel Station Management</h4>
            <h6>Convenience Store & Gas Station Real-Time Operations</h6>
          </div>
          <div className="d-flex gap-2">
            <button
              className="btn btn-danger btn-sm d-flex align-items-center gap-1"
              onClick={emergencyStopAll}
            >
              <AlertTriangle size={16} /> Emergency Stop All
            </button>
            <button
              className="btn btn-primary btn-sm d-flex align-items-center gap-1"
              onClick={() => {
                setTempPrices({ ...fuelPrices });
                setShowPriceModal(true);
              }}
            >
              <Sliders size={16} /> Update Fuel Prices
            </button>
          </div>
        </div>

        {/* Top Metric Cards */}
        <div className="row">
          <div className="col-xl-3 col-sm-6 col-12 d-flex">
            <div className="dash-count w-100 p-3 bg-white rounded shadow-sm">
              <div className="dash-counts">
                <h4>$18,450.20</h4>
                <h5>Today's Fuel Sales</h5>
              </div>
              <div className="dash-imgs text-primary">
                <Droplet size={32} />
              </div>
            </div>
          </div>
          <div className="col-xl-3 col-sm-6 col-12 d-flex">
            <div className="dash-count das1 w-100 p-3 bg-white rounded shadow-sm">
              <div className="dash-counts">
                <h4>8,460.5 L</h4>
                <h5>Total Volume Dispensed</h5>
              </div>
              <div className="dash-imgs text-success">
                <Activity size={32} />
              </div>
            </div>
          </div>
          <div className="col-xl-3 col-sm-6 col-12 d-flex">
            <div className="dash-count das2 w-100 p-3 bg-white rounded shadow-sm">
              <div className="dash-counts">
                <h4>$6,320.80</h4>
                <h5>Convenience Store Sales</h5>
              </div>
              <div className="dash-imgs text-info">
                <DollarSign size={32} />
              </div>
            </div>
          </div>
          <div className="col-xl-3 col-sm-6 col-12 d-flex">
            <div className="dash-count das3 w-100 p-3 bg-white rounded shadow-sm">
              <div className="dash-counts">
                <h4>{overallCapacityPct}% Full</h4>
                <h5>{totalFuelVolume.toLocaleString()} L in Tanks</h5>
              </div>
              <div className="dash-imgs text-warning">
                <Zap size={32} />
              </div>
            </div>
          </div>
        </div>

        {/* Fuel Prices Board */}
        <div className="card my-3">
          <div className="card-header d-flex justify-content-between align-items-center py-2">
            <h5 className="card-title mb-0 d-flex align-items-center gap-2">
              <DollarSign size={18} className="text-primary" /> Live Station Price Board (Per Liter)
            </h5>
            <span className="badge bg-light text-dark">Auto-synced with POS</span>
          </div>
          <div className="card-body py-3">
            <div className="row text-center">
              <div className="col-md-4 border-end">
                <span className="badge bg-success-light mb-1">Unleaded 91</span>
                <h3 className="text-success mb-0">${fuelPrices.gasoline91.toFixed(2)}</h3>
                <small className="text-muted">Tank 1 Source</small>
              </div>
              <div className="col-md-4 border-end">
                <span className="badge bg-primary-light mb-1">Super 95</span>
                <h3 className="text-primary mb-0">${fuelPrices.gasoline95.toFixed(2)}</h3>
                <small className="text-muted">Tank 2 Source</small>
              </div>
              <div className="col-md-4">
                <span className="badge bg-warning-light mb-1">Diesel</span>
                <h3 className="text-warning mb-0">${fuelPrices.diesel.toFixed(2)}</h3>
                <small className="text-muted">Tank 3 Source</small>
              </div>
            </div>
          </div>
        </div>

        {/* Live Dispensers Grid */}
        <div className="card mb-4">
          <div className="card-header d-flex justify-content-between align-items-center">
            <h5 className="card-title mb-0">Live Dispensers & Pumps Monitor (8 Nozzles)</h5>
            <div className="d-flex gap-2">
              <span className="badge bg-success">Dispensing</span>
              <span className="badge bg-primary">Idle</span>
              <span className="badge bg-warning">Authorized</span>
              <span className="badge bg-secondary">Maintenance</span>
            </div>
          </div>
          <div className="card-body">
            <div className="row g-3">
              {pumps.map((pump) => {
                const isDispensing = pump.status === "Dispensing";
                const isIdle = pump.status === "Idle";
                const isAuth = pump.status === "Authorized";
                return (
                  <div className="col-xl-3 col-md-6 col-12" key={pump.id}>
                    <div
                      className={`card h-100 border ${
                        isDispensing
                          ? "border-success shadow-sm"
                          : isAuth
                          ? "border-warning"
                          : "border-light"
                      }`}
                      style={{ backgroundColor: isDispensing ? "#f0fdf4" : "#fafafa" }}
                    >
                      <div className="card-body p-3">
                        <div className="d-flex justify-content-between align-items-center mb-2">
                          <h6 className="fw-bold mb-0">
                            ⛽ Pump #{pump.id} <small className="text-muted">({pump.island})</small>
                          </h6>
                          <span
                            className={`badge ${
                              isDispensing
                                ? "bg-success"
                                : isIdle
                                ? "bg-primary"
                                : isAuth
                                ? "bg-warning"
                                : "bg-secondary"
                            }`}
                          >
                            {pump.status}
                          </span>
                        </div>

                        <div className="p-2 bg-white rounded border mb-2">
                          <div className="d-flex justify-content-between">
                            <span className="text-muted small">Fuel Grade:</span>
                            <span className="fw-bold small">{pump.grade}</span>
                          </div>
                          <div className="d-flex justify-content-between align-items-baseline mt-1">
                            <span className="text-muted small">Current Volume:</span>
                            <h5 className="mb-0 text-dark fw-bold">{pump.currentLiters.toFixed(2)} L</h5>
                          </div>
                          <div className="d-flex justify-content-between align-items-baseline mt-1">
                            <span className="text-muted small">Current Amount:</span>
                            <h5 className="mb-0 text-success fw-bold">${pump.currentAmount.toFixed(2)}</h5>
                          </div>
                        </div>

                        <div className="d-flex gap-1">
                          <button
                            className={`btn btn-sm w-100 ${
                              isDispensing ? "btn-outline-danger" : "btn-outline-success"
                            }`}
                            onClick={() => togglePumpStatus(pump.id)}
                            disabled={pump.status === "Maintenance"}
                          >
                            {isDispensing ? "Stop Pump" : "Simulate Flow"}
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                );
              })}
            </div>
          </div>
        </div>

        {/* Underground Storage Tanks (UST) */}
        <div className="card mb-4">
          <div className="card-header d-flex justify-content-between align-items-center">
            <h5 className="card-title mb-0">Underground Storage Tanks (UST) Real-Time Levels</h5>
            <Link to="/fuel-tanks" className="btn btn-sm btn-outline-primary">
              Manage Tanks & Deliveries
            </Link>
          </div>
          <div className="card-body">
            <div className="row g-4">
              {tanks.map((tank) => {
                const pct = Math.round((tank.currentVolume / tank.capacity) * 100);
                const ullage = tank.capacity - tank.currentVolume;
                return (
                  <div className="col-lg-4 col-12" key={tank.id}>
                    <div className="border p-3 rounded bg-white h-100 shadow-sm">
                      <div className="d-flex justify-content-between align-items-center mb-2">
                        <h6 className="fw-bold mb-0">{tank.name}</h6>
                        <span className={`badge ${tank.badgeColor}`}>{pct}% Full</span>
                      </div>
                      <div className="progress mb-3" style={{ height: "22px" }}>
                        <div
                          className={`progress-bar progress-bar-striped progress-bar-animated ${tank.color}`}
                          role="progressbar"
                          style={{ width: `${pct}%` }}
                        >
                          {tank.currentVolume.toLocaleString()} L
                        </div>
                      </div>
                      <div className="row text-muted small g-2">
                        <div className="col-6">
                          <span>Total Capacity:</span>
                          <div className="fw-bold text-dark">{tank.capacity.toLocaleString()} L</div>
                        </div>
                        <div className="col-6">
                          <span>Ullage (Free Space):</span>
                          <div className="fw-bold text-dark">{ullage.toLocaleString()} L</div>
                        </div>
                        <div className="col-6">
                          <span>Water Bottom:</span>
                          <div className="fw-bold text-dark">{tank.waterLevelMm} mm</div>
                        </div>
                        <div className="col-6">
                          <span>Fuel Temperature:</span>
                          <div className="fw-bold text-dark">{tank.temperatureC} °C</div>
                        </div>
                      </div>
                    </div>
                  </div>
                );
              })}
            </div>
          </div>
        </div>

        {/* Recent Fuel Transactions Table */}
        <div className="card">
          <div className="card-header d-flex justify-content-between align-items-center">
            <h5 className="card-title mb-0">Recent Fuel Dispense Logs</h5>
            <span className="badge bg-light text-dark">Shift #1 Active</span>
          </div>
          <div className="card-body p-0">
            <div className="table-responsive">
              <table className="table table-hover mb-0">
                <thead className="thead-light">
                  <tr>
                    <th>Txn ID</th>
                    <th>Time</th>
                    <th>Dispenser</th>
                    <th>Fuel Grade</th>
                    <th>Volume (L)</th>
                    <th>Total ($)</th>
                    <th>Payment</th>
                    <th>Cashier</th>
                  </tr>
                </thead>
                <tbody>
                  {transactions.map((t) => (
                    <tr key={t.id}>
                      <td className="fw-bold">{t.id}</td>
                      <td>{t.time}</td>
                      <td>{t.pump}</td>
                      <td>
                        <span
                          className={`badge ${
                            t.grade.includes("95")
                              ? "bg-primary"
                              : t.grade.includes("91")
                              ? "bg-success"
                              : "bg-warning"
                          }`}
                        >
                          {t.grade}
                        </span>
                      </td>
                      <td>{t.liters.toFixed(2)} L</td>
                      <td className="fw-bold text-success">${t.total.toFixed(2)}</td>
                      <td>{t.payment}</td>
                      <td>{t.cashier}</td>
                    </tr>
                  ))}
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      {/* Fuel Price Update Modal */}
      {showPriceModal && (
        <div
          className="modal fade show d-block"
          tabIndex="-1"
          style={{ backgroundColor: "rgba(0,0,0,0.5)" }}
        >
          <div className="modal-dialog modal-dialog-centered">
            <div className="modal-content">
              <div className="modal-header">
                <h5 className="modal-title">Update Fuel Pump Prices</h5>
                <button
                  type="button"
                  className="btn-close"
                  onClick={() => setShowPriceModal(false)}
                />
              </div>
              <div className="modal-body">
                <p className="text-muted small">
                  Changes will update all station dispensers and convenience store POS calculation in real-time.
                </p>
                <div className="mb-3">
                  <label className="form-label fw-bold">Unleaded 91 ($/L)</label>
                  <input
                    type="number"
                    step="0.01"
                    className="form-control"
                    value={tempPrices.gasoline91}
                    onChange={(e) =>
                      setTempPrices({ ...tempPrices, gasoline91: parseFloat(e.target.value) || 0 })
                    }
                  />
                </div>
                <div className="mb-3">
                  <label className="form-label fw-bold">Super 95 ($/L)</label>
                  <input
                    type="number"
                    step="0.01"
                    className="form-control"
                    value={tempPrices.gasoline95}
                    onChange={(e) =>
                      setTempPrices({ ...tempPrices, gasoline95: parseFloat(e.target.value) || 0 })
                    }
                  />
                </div>
                <div className="mb-3">
                  <label className="form-label fw-bold">Diesel ($/L)</label>
                  <input
                    type="number"
                    step="0.01"
                    className="form-control"
                    value={tempPrices.diesel}
                    onChange={(e) =>
                      setTempPrices({ ...tempPrices, diesel: parseFloat(e.target.value) || 0 })
                    }
                  />
                </div>
              </div>
              <div className="modal-footer">
                <button
                  type="button"
                  className="btn btn-secondary"
                  onClick={() => setShowPriceModal(false)}
                >
                  Cancel
                </button>
                <button
                  type="button"
                  className="btn btn-primary"
                  onClick={handleUpdatePrices}
                >
                  Save & Push to Pumps
                </button>
              </div>
            </div>
          </div>
        </div>
      )}
    </div>
  );
};

export default FuelDashboard;
