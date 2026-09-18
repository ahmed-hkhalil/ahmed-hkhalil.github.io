import React, { useState } from "react";
import Swal from "sweetalert2";
import withReactContent from "sweetalert2-react-content";
import { PlusCircle, Truck, Database, Activity, FileText } from "react-feather";

const MySwal = withReactContent(Swal);

const FuelTanks = () => {
  const [tanks, setTanks] = useState([
    {
      id: "TANK-01",
      name: "Underground Tank #1",
      grade: "Gasoline 91",
      capacity: 50000,
      currentVolume: 34500,
      waterMm: 12,
      tempC: 24.2,
      lastDelivery: "2026-09-16 14:30",
    },
    {
      id: "TANK-02",
      name: "Underground Tank #2",
      grade: "Gasoline 95",
      capacity: 40000,
      currentVolume: 28200,
      waterMm: 8,
      tempC: 23.8,
      lastDelivery: "2026-09-17 09:15",
    },
    {
      id: "TANK-03",
      name: "Underground Tank #3",
      grade: "Low Sulfur Diesel",
      capacity: 30000,
      currentVolume: 19800,
      waterMm: 15,
      tempC: 22.5,
      lastDelivery: "2026-09-15 16:45",
    },
  ]);

  const [deliveries, setDeliveries] = useState([
    {
      id: "DEL-4491",
      date: "2026-09-17 09:15",
      tankId: "TANK-02 (Gasoline 95)",
      supplier: "National Petroleum Supply",
      tankerPlate: "7821-XDA",
      volumeLiters: 15000,
      driverName: "Khalid Mansoor",
      invoiceNo: "INV-99823",
      dipBeforeCm: 142,
      dipAfterCm: 228,
    },
    {
      id: "DEL-4490",
      date: "2026-09-16 14:30",
      tankId: "TANK-01 (Gasoline 91)",
      supplier: "National Petroleum Supply",
      tankerPlate: "3491-KJA",
      volumeLiters: 20000,
      driverName: "Tariq Aziz",
      invoiceNo: "INV-99712",
      dipBeforeCm: 110,
      dipAfterCm: 235,
    },
  ]);

  const [showDeliveryModal, setShowDeliveryModal] = useState(false);
  const [newDelivery, setNewDelivery] = useState({
    tankId: "TANK-01",
    supplier: "National Petroleum Supply",
    tankerPlate: "",
    volumeLiters: 10000,
    driverName: "",
    invoiceNo: "",
    dipBeforeCm: 150,
    dipAfterCm: 220,
  });

  const handleRecordDelivery = (e) => {
    e.preventDefault();
    const addedVol = parseFloat(newDelivery.volumeLiters) || 0;

    // Update target tank volume
    setTanks((prev) =>
      prev.map((t) => {
        if (t.id === newDelivery.tankId) {
          const updated = Math.min(t.capacity, t.currentVolume + addedVol);
          return { ...t, currentVolume: updated, lastDelivery: "Just now" };
        }
        return t;
      })
    );

    const delEntry = {
      id: `DEL-${Math.floor(1000 + Math.random() * 9000)}`,
      date: "Just now",
      tankId: newDelivery.tankId,
      supplier: newDelivery.supplier,
      tankerPlate: newDelivery.tankerPlate || "N/A",
      volumeLiters: addedVol,
      driverName: newDelivery.driverName || "Driver",
      invoiceNo: newDelivery.invoiceNo || "N/A",
      dipBeforeCm: newDelivery.dipBeforeCm,
      dipAfterCm: newDelivery.dipAfterCm,
    };

    setDeliveries([delEntry, ...deliveries]);
    setShowDeliveryModal(false);
    MySwal.fire({
      icon: "success",
      title: "Fuel Delivery Recorded!",
      text: `${addedVol.toLocaleString()} Liters added to ${newDelivery.tankId}.`,
      timer: 2000,
      showConfirmButton: false,
    });
  };

  return (
    <div className="page-wrapper">
      <div className="content">
        <div className="page-header d-flex align-items-center justify-content-between">
          <div className="page-title">
            <h4>Underground Storage Tanks & Deliveries</h4>
            <h6>Monitor fuel levels, water bottom detection, and tanker refueling logs</h6>
          </div>
          <button
            className="btn btn-primary btn-sm d-flex align-items-center gap-1"
            onClick={() => setShowDeliveryModal(true)}
          >
            <Truck size={16} /> Record Tanker Delivery
          </button>
        </div>

        {/* Tank Status Overview */}
        <div className="row mb-4">
          {tanks.map((tank) => {
            const pct = Math.round((tank.currentVolume / tank.capacity) * 100);
            const ullage = tank.capacity - tank.currentVolume;
            return (
              <div className="col-lg-4 col-12" key={tank.id}>
                <div className="card h-100 shadow-sm">
                  <div className="card-body">
                    <div className="d-flex justify-content-between align-items-center mb-2">
                      <h5 className="fw-bold mb-0">{tank.name}</h5>
                      <span className="badge bg-primary">{tank.grade}</span>
                    </div>

                    <div className="my-3">
                      <div className="d-flex justify-content-between small text-muted mb-1">
                        <span>Current Volume</span>
                        <span className="fw-bold text-dark">{pct}% ({tank.currentVolume.toLocaleString()} L)</span>
                      </div>
                      <div className="progress" style={{ height: "20px" }}>
                        <div
                          className="progress-bar bg-success progress-bar-striped"
                          style={{ width: `${pct}%` }}
                        >
                          {pct}%
                        </div>
                      </div>
                    </div>

                    <ul className="list-group list-group-flush small">
                      <li className="list-group-item d-flex justify-content-between px-0">
                        <span className="text-muted">Max Capacity:</span>
                        <span className="fw-bold">{tank.capacity.toLocaleString()} L</span>
                      </li>
                      <li className="list-group-item d-flex justify-content-between px-0">
                        <span className="text-muted">Available Ullage:</span>
                        <span className="fw-bold text-success">{ullage.toLocaleString()} L</span>
                      </li>
                      <li className="list-group-item d-flex justify-content-between px-0">
                        <span className="text-muted">Water Bottom Sensor:</span>
                        <span className="fw-bold">{tank.waterMm} mm</span>
                      </li>
                      <li className="list-group-item d-flex justify-content-between px-0">
                        <span className="text-muted">Fuel Temperature:</span>
                        <span className="fw-bold">{tank.tempC} °C</span>
                      </li>
                      <li className="list-group-item d-flex justify-content-between px-0">
                        <span className="text-muted">Last Refueled:</span>
                        <span className="fw-bold text-primary">{tank.lastDelivery}</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            );
          })}
        </div>

        {/* Tanker Fuel Delivery History */}
        <div className="card">
          <div className="card-header d-flex justify-content-between align-items-center">
            <h5 className="card-title mb-0">Tanker Delivery & Refueling Invoices</h5>
            <span className="badge bg-light text-dark">Verified by Station Dip Readings</span>
          </div>
          <div className="card-body p-0">
            <div className="table-responsive">
              <table className="table table-hover mb-0">
                <thead className="thead-light">
                  <tr>
                    <th>Ref #</th>
                    <th>Date & Time</th>
                    <th>Target Tank</th>
                    <th>Supplier</th>
                    <th>Tanker Plate</th>
                    <th>Volume Received</th>
                    <th>Dip (Before / After)</th>
                    <th>Driver</th>
                    <th>Invoice No</th>
                  </tr>
                </thead>
                <tbody>
                  {deliveries.map((del) => (
                    <tr key={del.id}>
                      <td className="fw-bold">{del.id}</td>
                      <td>{del.date}</td>
                      <td>{del.tankId}</td>
                      <td>{del.supplier}</td>
                      <td>{del.tankerPlate}</td>
                      <td className="fw-bold text-success">+{del.volumeLiters.toLocaleString()} L</td>
                      <td>{del.dipBeforeCm} cm → {del.dipAfterCm} cm</td>
                      <td>{del.driverName}</td>
                      <td><span className="badge bg-light text-dark border">{del.invoiceNo}</span></td>
                    </tr>
                  ))}
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      {showDeliveryModal && (
        <div className="modal fade show d-block" tabIndex="-1" style={{ backgroundColor: "rgba(0,0,0,0.5)" }}>
          <div className="modal-dialog modal-dialog-centered">
            <div className="modal-content">
              <form onSubmit={handleRecordDelivery}>
                <div className="modal-header">
                  <h5 className="modal-title">Record Fuel Tanker Delivery</h5>
                  <button type="button" className="btn-close" onClick={() => setShowDeliveryModal(false)} />
                </div>
                <div className="modal-body">
                  <div className="mb-3">
                    <label className="form-label">Receiving Tank</label>
                    <select
                      className="form-select"
                      value={newDelivery.tankId}
                      onChange={(e) => setNewDelivery({ ...newDelivery, tankId: e.target.value })}
                    >
                      {tanks.map((t) => (
                        <option key={t.id} value={t.id}>
                          {t.name} ({t.grade})
                        </option>
                      ))}
                    </select>
                  </div>
                  <div className="mb-3">
                    <label className="form-label">Delivered Volume (Liters)</label>
                    <input
                      type="number"
                      className="form-control"
                      value={newDelivery.volumeLiters}
                      onChange={(e) => setNewDelivery({ ...newDelivery, volumeLiters: e.target.value })}
                      required
                    />
                  </div>
                  <div className="row g-2 mb-3">
                    <div className="col-6">
                      <label className="form-label">Tanker Plate #</label>
                      <input
                        type="text"
                        className="form-control"
                        placeholder="e.g. 5421-KSA"
                        value={newDelivery.tankerPlate}
                        onChange={(e) => setNewDelivery({ ...newDelivery, tankerPlate: e.target.value })}
                      />
                    </div>
                    <div className="col-6">
                      <label className="form-label">Supplier Invoice #</label>
                      <input
                        type="text"
                        className="form-control"
                        placeholder="e.g. INV-1002"
                        value={newDelivery.invoiceNo}
                        onChange={(e) => setNewDelivery({ ...newDelivery, invoiceNo: e.target.value })}
                      />
                    </div>
                  </div>
                  <div className="row g-2 mb-3">
                    <div className="col-6">
                      <label className="form-label">Dip Before (cm)</label>
                      <input
                        type="number"
                        className="form-control"
                        value={newDelivery.dipBeforeCm}
                        onChange={(e) => setNewDelivery({ ...newDelivery, dipBeforeCm: e.target.value })}
                      />
                    </div>
                    <div className="col-6">
                      <label className="form-label">Dip After (cm)</label>
                      <input
                        type="number"
                        className="form-control"
                        value={newDelivery.dipAfterCm}
                        onChange={(e) => setNewDelivery({ ...newDelivery, dipAfterCm: e.target.value })}
                      />
                    </div>
                  </div>
                </div>
                <div className="modal-footer">
                  <button type="button" className="btn btn-secondary" onClick={() => setShowDeliveryModal(false)}>
                    Cancel
                  </button>
                  <button type="submit" className="btn btn-primary">
                    Confirm & Update Tank
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

export default FuelTanks;
