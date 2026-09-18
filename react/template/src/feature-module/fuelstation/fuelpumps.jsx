import React, { useState } from "react";
import { Link } from "react-router-dom";
import Swal from "sweetalert2";
import withReactContent from "sweetalert2-react-content";
import { PlusCircle, Sliders, CheckCircle, AlertOctagon, Tool } from "react-feather";

const MySwal = withReactContent(Swal);

const FuelPumps = () => {
  const [pumps, setPumps] = useState([
    { id: 1, name: "Dispensers 1A / 1B", island: "Island #1 (Front North)", nozzles: ["91 Unleaded", "95 Super"], totalizerL: 142850.4, status: "Active", flowRate: "35 L/min" },
    { id: 2, name: "Dispensers 2A / 2B", island: "Island #1 (Front South)", nozzles: ["91 Unleaded", "95 Super"], totalizerL: 138420.1, status: "Active", flowRate: "35 L/min" },
    { id: 3, name: "Dispensers 3A / 3B", island: "Island #2 (Center North)", nozzles: ["91 Unleaded", "95 Super", "Diesel"], totalizerL: 215680.0, status: "Active", flowRate: "38 L/min" },
    { id: 4, name: "Dispensers 4A / 4B", island: "Island #2 (Center South)", nozzles: ["91 Unleaded", "95 Super", "Diesel"], totalizerL: 198750.9, status: "Active", flowRate: "38 L/min" },
    { id: 5, name: "Dispensers 5A / 5B", island: "Island #3 (Store Side North)", nozzles: ["91 Unleaded", "95 Super"], totalizerL: 98450.5, status: "Active", flowRate: "35 L/min" },
    { id: 6, name: "Dispensers 6A / 6B", island: "Island #3 (Store Side South)", nozzles: ["91 Unleaded", "Diesel"], totalizerL: 112340.2, status: "Active", flowRate: "35 L/min" },
    { id: 7, name: "Dispensers 7A / 7B", island: "Island #4 (Heavy Truck Lane)", nozzles: ["High-Flow Diesel"], totalizerL: 345600.8, status: "Active", flowRate: "70 L/min (High-Flow)" },
    { id: 8, name: "Dispensers 8A / 8B", island: "Island #4 (Heavy Truck Lane)", nozzles: ["High-Flow Diesel"], totalizerL: 312100.4, status: "Maintenance", flowRate: "70 L/min" },
  ]);

  const [showAddModal, setShowAddModal] = useState(false);
  const [newPump, setNewPump] = useState({
    name: "Dispensers 9A",
    island: "Island #5",
    nozzles: "91 Unleaded, 95 Super",
    totalizerL: 0,
    flowRate: "35 L/min",
  });

  const toggleStatus = (id) => {
    setPumps((prev) =>
      prev.map((p) => {
        if (p.id === id) {
          const newStatus = p.status === "Active" ? "Maintenance" : "Active";
          return { ...p, status: newStatus };
        }
        return p;
      })
    );
  };

  const handleAddPump = (e) => {
    e.preventDefault();
    const item = {
      id: pumps.length + 1,
      name: newPump.name,
      island: newPump.island,
      nozzles: newPump.nozzles.split(",").map((s) => s.trim()),
      totalizerL: parseFloat(newPump.totalizerL) || 0,
      status: "Active",
      flowRate: newPump.flowRate,
    };
    setPumps([...pumps, item]);
    setShowAddModal(false);
    MySwal.fire("Success", "New Dispenser successfully registered and mapped to tanks.", "success");
  };

  return (
    <div className="page-wrapper">
      <div className="content">
        <div className="page-header d-flex align-items-center justify-content-between">
          <div className="page-title">
            <h4>Fuel Dispensers & Pumps</h4>
            <h6>Manage station nozzles, electronic totalizers, and flow calibration</h6>
          </div>
          <button className="btn btn-primary btn-sm d-flex align-items-center gap-1" onClick={() => setShowAddModal(true)}>
            <PlusCircle size={16} /> Add New Dispenser
          </button>
        </div>

        <div className="card">
          <div className="card-header d-flex justify-content-between align-items-center">
            <h5 className="card-title mb-0">Active Dispensers ({pumps.length})</h5>
            <span className="badge bg-light text-dark">Convenience Store Forecourt</span>
          </div>
          <div className="card-body p-0">
            <div className="table-responsive">
              <table className="table table-hover mb-0">
                <thead className="thead-light">
                  <tr>
                    <th>Pump #</th>
                    <th>Dispenser Name</th>
                    <th>Island Location</th>
                    <th>Supported Fuel Grades</th>
                    <th>Electronic Totalizer</th>
                    <th>Flow Rating</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  {pumps.map((pump) => (
                    <tr key={pump.id}>
                      <td className="fw-bold">#{pump.id}</td>
                      <td>
                        <strong>{pump.name}</strong>
                      </td>
                      <td>{pump.island}</td>
                      <td>
                        <div className="d-flex flex-wrap gap-1">
                          {pump.nozzles.map((nz, idx) => (
                            <span key={idx} className="badge bg-light text-dark border">
                              {nz}
                            </span>
                          ))}
                        </div>
                      </td>
                      <td className="fw-bold text-primary">{pump.totalizerL.toLocaleString()} L</td>
                      <td>{pump.flowRate}</td>
                      <td>
                        <span
                          className={`badge ${
                            pump.status === "Active" ? "bg-success" : "bg-warning"
                          }`}
                        >
                          {pump.status}
                        </span>
                      </td>
                      <td>
                        <button
                          className={`btn btn-sm ${
                            pump.status === "Active" ? "btn-outline-warning" : "btn-outline-success"
                          }`}
                          onClick={() => toggleStatus(pump.id)}
                        >
                          {pump.status === "Active" ? "Set Maintenance" : "Activate Pump"}
                        </button>
                      </td>
                    </tr>
                  ))}
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      {showAddModal && (
        <div className="modal fade show d-block" tabIndex="-1" style={{ backgroundColor: "rgba(0,0,0,0.5)" }}>
          <div className="modal-dialog modal-dialog-centered">
            <div className="modal-content">
              <form onSubmit={handleAddPump}>
                <div className="modal-header">
                  <h5 className="modal-title">Register New Dispenser</h5>
                  <button type="button" className="btn-close" onClick={() => setShowAddModal(false)} />
                </div>
                <div className="modal-body">
                  <div className="mb-3">
                    <label className="form-label">Dispenser Title</label>
                    <input
                      type="text"
                      className="form-control"
                      value={newPump.name}
                      onChange={(e) => setNewPump({ ...newPump, name: e.target.value })}
                      required
                    />
                  </div>
                  <div className="mb-3">
                    <label className="form-label">Island Location</label>
                    <input
                      type="text"
                      className="form-control"
                      value={newPump.island}
                      onChange={(e) => setNewPump({ ...newPump, island: e.target.value })}
                      required
                    />
                  </div>
                  <div className="mb-3">
                    <label className="form-label">Nozzle Fuel Grades (comma separated)</label>
                    <input
                      type="text"
                      className="form-control"
                      value={newPump.nozzles}
                      onChange={(e) => setNewPump({ ...newPump, nozzles: e.target.value })}
                      required
                    />
                  </div>
                  <div className="mb-3">
                    <label className="form-label">Initial Totalizer Reading (Liters)</label>
                    <input
                      type="number"
                      className="form-control"
                      value={newPump.totalizerL}
                      onChange={(e) => setNewPump({ ...newPump, totalizerL: e.target.value })}
                    />
                  </div>
                </div>
                <div className="modal-footer">
                  <button type="button" className="btn btn-secondary" onClick={() => setShowAddModal(false)}>
                    Cancel
                  </button>
                  <button type="submit" className="btn btn-primary">
                    Save Dispenser
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

export default FuelPumps;
