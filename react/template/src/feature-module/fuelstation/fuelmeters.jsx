import React, { useState } from "react";
import Swal from "sweetalert2";
import withReactContent from "sweetalert2-react-content";
import { CheckCircle, AlertTriangle, FileText, DollarSign, Calendar } from "react-feather";

const MySwal = withReactContent(Swal);

const FuelMeters = () => {
  const [shiftRecords, setShiftRecords] = useState([
    {
      id: "SHT-2026-0918-1",
      shift: "Morning Shift (06:00 - 14:00)",
      cashier: "Ahmed Khalil (Station 1)",
      pumpNozzle: "Pump #1 - 95 Super",
      openingMeter: 138400.0,
      closingMeter: 139150.0,
      unitPrice: 2.33,
      actualCollected: 1747.50,
      notes: "Balanced perfectly",
    },
    {
      id: "SHT-2026-0918-2",
      shift: "Morning Shift (06:00 - 14:00)",
      cashier: "Ahmed Khalil (Station 1)",
      pumpNozzle: "Pump #2 - 91 Unleaded",
      openingMeter: 142100.0,
      closingMeter: 143200.0,
      unitPrice: 2.18,
      actualCollected: 2398.00,
      notes: "Balanced",
    },
    {
      id: "SHT-2026-0918-3",
      shift: "Morning Shift (06:00 - 14:00)",
      cashier: "Omar Farooq (Station 2)",
      pumpNozzle: "Pump #3 - Diesel",
      openingMeter: 215200.0,
      closingMeter: 216450.0,
      unitPrice: 1.15,
      actualCollected: 1437.50,
      notes: "Standard truck volume",
    },
    {
      id: "SHT-2026-0918-4",
      shift: "Morning Shift (06:00 - 14:00)",
      cashier: "Omar Farooq (Station 2)",
      pumpNozzle: "Pump #4 - 95 Super",
      openingMeter: 198200.0,
      closingMeter: 198920.0,
      unitPrice: 2.33,
      actualCollected: 1675.00,
      notes: "-$2.60 calibration difference",
    },
  ]);

  const [showShiftModal, setShowShiftModal] = useState(false);
  const [newShift, setNewShift] = useState({
    shift: "Evening Shift (14:00 - 22:00)",
    cashier: "Ahmed Khalil",
    pumpNozzle: "Pump #1 - 95 Super",
    openingMeter: 139150.0,
    closingMeter: 139800.0,
    unitPrice: 2.33,
    actualCollected: 1514.50,
    notes: "",
  });

  const handleSaveShift = (e) => {
    e.preventDefault();
    const item = {
      id: `SHT-${Date.now().toString().slice(-6)}`,
      shift: newShift.shift,
      cashier: newShift.cashier,
      pumpNozzle: newShift.pumpNozzle,
      openingMeter: parseFloat(newShift.openingMeter) || 0,
      closingMeter: parseFloat(newShift.closingMeter) || 0,
      unitPrice: parseFloat(newShift.unitPrice) || 0,
      actualCollected: parseFloat(newShift.actualCollected) || 0,
      notes: newShift.notes || "Recorded successfully",
    };
    setShiftRecords([item, ...shiftRecords]);
    setShowShiftModal(false);
    MySwal.fire("Saved", "Shift meter reading logged and reconciled.", "success");
  };

  return (
    <div className="page-wrapper">
      <div className="content">
        <div className="page-header d-flex align-items-center justify-content-between">
          <div className="page-title">
            <h4>Shift Meter Readings & Reconciliation</h4>
            <h6>Audit pump totalizers against cashier cash and POS card collections</h6>
          </div>
          <button
            className="btn btn-primary btn-sm d-flex align-items-center gap-1"
            onClick={() => setShowShiftModal(true)}
          >
            <Calendar size={16} /> Log Shift Meter Close
          </button>
        </div>

        <div className="card">
          <div className="card-header d-flex justify-content-between align-items-center">
            <h5 className="card-title mb-0">Shift Totalizer Audits</h5>
            <span className="badge bg-success">Shift Reconciled</span>
          </div>
          <div className="card-body p-0">
            <div className="table-responsive">
              <table className="table table-hover mb-0">
                <thead className="thead-light">
                  <tr>
                    <th>Shift Ref</th>
                    <th>Cashier</th>
                    <th>Pump & Grade</th>
                    <th>Opening Meter</th>
                    <th>Closing Meter</th>
                    <th>Volume Sold (L)</th>
                    <th>Theoretical Revenue</th>
                    <th>POS Collected</th>
                    <th>Variance</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  {shiftRecords.map((r) => {
                    const volumeSold = r.closingMeter - r.openingMeter;
                    const theoretical = volumeSold * r.unitPrice;
                    const variance = r.actualCollected - theoretical;
                    const isBalanced = Math.abs(variance) < 3;
                    return (
                      <tr key={r.id}>
                        <td className="fw-bold">{r.id}</td>
                        <td>{r.cashier}</td>
                        <td><strong>{r.pumpNozzle}</strong></td>
                        <td>{r.openingMeter.toFixed(1)} L</td>
                        <td>{r.closingMeter.toFixed(1)} L</td>
                        <td className="fw-bold text-dark">{volumeSold.toFixed(1)} L</td>
                        <td>${theoretical.toFixed(2)}</td>
                        <td className="fw-bold text-success">${r.actualCollected.toFixed(2)}</td>
                        <td>
                          <span className={`badge ${isBalanced ? "bg-success" : "bg-danger"}`}>
                            {variance >= 0 ? `+$${variance.toFixed(2)}` : `-$${Math.abs(variance).toFixed(2)}`}
                          </span>
                        </td>
                        <td>
                          {isBalanced ? (
                            <span className="text-success d-flex align-items-center gap-1 small">
                              <CheckCircle size={14} /> OK
                            </span>
                          ) : (
                            <span className="text-danger d-flex align-items-center gap-1 small">
                              <AlertTriangle size={14} /> Audit Needed
                            </span>
                          )}
                        </td>
                      </tr>
                    );
                  })}
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      {showShiftModal && (
        <div className="modal fade show d-block" tabIndex="-1" style={{ backgroundColor: "rgba(0,0,0,0.5)" }}>
          <div className="modal-dialog modal-dialog-centered">
            <div className="modal-content">
              <form onSubmit={handleSaveShift}>
                <div className="modal-header">
                  <h5 className="modal-title">Log Shift Meter Close</h5>
                  <button type="button" className="btn-close" onClick={() => setShowShiftModal(false)} />
                </div>
                <div className="modal-body">
                  <div className="mb-3">
                    <label className="form-label">Shift</label>
                    <select
                      className="form-select"
                      value={newShift.shift}
                      onChange={(e) => setNewShift({ ...newShift, shift: e.target.value })}
                    >
                      <option value="Morning Shift (06:00 - 14:00)">Morning Shift (06:00 - 14:00)</option>
                      <option value="Evening Shift (14:00 - 22:00)">Evening Shift (14:00 - 22:00)</option>
                      <option value="Night Shift (22:00 - 06:00)">Night Shift (22:00 - 06:00)</option>
                    </select>
                  </div>
                  <div className="mb-3">
                    <label className="form-label">Cashier Name</label>
                    <input
                      type="text"
                      className="form-control"
                      value={newShift.cashier}
                      onChange={(e) => setNewShift({ ...newShift, cashier: e.target.value })}
                      required
                    />
                  </div>
                  <div className="mb-3">
                    <label className="form-label">Pump & Nozzle</label>
                    <input
                      type="text"
                      className="form-control"
                      value={newShift.pumpNozzle}
                      onChange={(e) => setNewShift({ ...newShift, pumpNozzle: e.target.value })}
                      required
                    />
                  </div>
                  <div className="row g-2 mb-3">
                    <div className="col-6">
                      <label className="form-label">Opening Meter (L)</label>
                      <input
                        type="number"
                        className="form-control"
                        value={newShift.openingMeter}
                        onChange={(e) => setNewShift({ ...newShift, openingMeter: e.target.value })}
                        required
                      />
                    </div>
                    <div className="col-6">
                      <label className="form-label">Closing Meter (L)</label>
                      <input
                        type="number"
                        className="form-control"
                        value={newShift.closingMeter}
                        onChange={(e) => setNewShift({ ...newShift, closingMeter: e.target.value })}
                        required
                      />
                    </div>
                  </div>
                  <div className="row g-2 mb-3">
                    <div className="col-6">
                      <label className="form-label">Price / Liter ($)</label>
                      <input
                        type="number"
                        step="0.01"
                        className="form-control"
                        value={newShift.unitPrice}
                        onChange={(e) => setNewShift({ ...newShift, unitPrice: e.target.value })}
                        required
                      />
                    </div>
                    <div className="col-6">
                      <label className="form-label">Actual POS Cash ($)</label>
                      <input
                        type="number"
                        step="0.01"
                        className="form-control"
                        value={newShift.actualCollected}
                        onChange={(e) => setNewShift({ ...newShift, actualCollected: e.target.value })}
                        required
                      />
                    </div>
                  </div>
                </div>
                <div className="modal-footer">
                  <button type="button" className="btn btn-secondary" onClick={() => setShowShiftModal(false)}>
                    Cancel
                  </button>
                  <button type="submit" className="btn btn-primary">
                    Reconcile & Save
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      )}
    </div>
  );
};

export default FuelMeters;
