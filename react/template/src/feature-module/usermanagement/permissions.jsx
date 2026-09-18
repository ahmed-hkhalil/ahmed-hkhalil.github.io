import React, { useState } from 'react'
import ImageWithBasePath from '../../core/img/imagewithbasebath'
import { OverlayTrigger, Tooltip } from 'react-bootstrap';
import { Link } from 'react-router-dom';
import { ChevronUp, Filter, Sliders, Zap, Shield, Save } from 'react-feather';
import { setToogleHeader } from '../../core/redux/action';
import { useDispatch, useSelector } from 'react-redux';
import Select from 'react-select';
import { RotateCcw } from 'feather-icons-react/build/IconComponents';
import { DatePicker } from 'antd';
import Swal from 'sweetalert2';
import withReactContent from 'sweetalert2-react-content';

const MySwal = withReactContent(Swal);

const SYSTEM_MODULES = [
  { key: "pos", name: "Point of Sale (POS Terminal)" },
  { key: "daily_sheet", name: "Daily Cashier Reconciliation & Closing" },
  { key: "fuel", name: "Forecourt Fuel Station & Pumps" },
  { key: "inventory", name: "Inventory & Convenience Store Products" },
  { key: "sales", name: "Sales Reports & Analytics" },
  { key: "finance", name: "Finance, Accounts & Bank Deposits" },
  { key: "users", name: "User Management & Staff Scheduling" },
  { key: "settings", name: "System Settings & Hardware Integration" },
];

const DEFAULT_ROLE_PERMS = {
  "Super Admin": {
    pos: { create: true, edit: true, delete: true, view: true },
    daily_sheet: { create: true, edit: true, delete: true, view: true },
    fuel: { create: true, edit: true, delete: true, view: true },
    inventory: { create: true, edit: true, delete: true, view: true },
    sales: { create: true, edit: true, delete: true, view: true },
    finance: { create: true, edit: true, delete: true, view: true },
    users: { create: true, edit: true, delete: true, view: true },
    settings: { create: true, edit: true, delete: true, view: true },
  },
  "POS Cashier": {
    pos: { create: true, edit: true, delete: false, view: true },
    daily_sheet: { create: true, edit: true, delete: false, view: true },
    fuel: { create: false, edit: false, delete: false, view: false },
    inventory: { create: false, edit: false, delete: false, view: false },
    sales: { create: false, edit: false, delete: false, view: false },
    finance: { create: false, edit: false, delete: false, view: false },
    users: { create: false, edit: false, delete: false, view: false },
    settings: { create: false, edit: false, delete: false, view: false },
  },
  "Store Manager": {
    pos: { create: true, edit: true, delete: true, view: true },
    daily_sheet: { create: true, edit: true, delete: true, view: true },
    fuel: { create: true, edit: true, delete: false, view: true },
    inventory: { create: true, edit: true, delete: true, view: true },
    sales: { create: true, edit: true, delete: false, view: true },
    finance: { create: true, edit: false, delete: false, view: true },
    users: { create: false, edit: false, delete: false, view: true },
    settings: { create: false, edit: false, delete: false, view: false },
  },
  "Forecourt Attendant": {
    pos: { create: false, edit: false, delete: false, view: false },
    daily_sheet: { create: false, edit: false, delete: false, view: false },
    fuel: { create: true, edit: true, delete: false, view: true },
    inventory: { create: false, edit: false, delete: false, view: false },
    sales: { create: false, edit: false, delete: false, view: false },
    finance: { create: false, edit: false, delete: false, view: false },
    users: { create: false, edit: false, delete: false, view: false },
    settings: { create: false, edit: false, delete: false, view: false },
  },
};

const Permissions = () => {
    const dispatch = useDispatch();
    const data = useSelector((state) => state.toggle_header);
    const [isFilterVisible, setIsFilterVisible] = useState(false);
    const toggleFilterVisibility = () => {
        setIsFilterVisible((prevVisibility) => !prevVisibility);
    };
    const [selectedDate, setSelectedDate] = useState(new Date());
    const handleDateChange = (date) => {
        setSelectedDate(date);
    };

    const rolesList = [
        { value: 'Super Admin', label: 'Super Admin' },
        { value: 'POS Cashier', label: 'POS Cashier' },
        { value: 'Store Manager', label: 'Store Manager' },
        { value: 'Forecourt Attendant', label: 'Forecourt Attendant' },
    ];

    const [currentRole, setCurrentRole] = useState('POS Cashier');
    const [permissionsState, setPermissionsState] = useState(DEFAULT_ROLE_PERMS);

    const activePerms = permissionsState[currentRole] || DEFAULT_ROLE_PERMS['POS Cashier'];

    const handleRoleChange = (opt) => {
        if (opt) setCurrentRole(opt.value);
    };

    const handlePermToggle = (modKey, action) => {
        const updated = { ...permissionsState };
        const rolePerms = { ...updated[currentRole] };
        const modPerms = { ...rolePerms[modKey] };

        if (action === "all") {
            const allActive = modPerms.create && modPerms.edit && modPerms.delete && modPerms.view;
            modPerms.create = !allActive;
            modPerms.edit = !allActive;
            modPerms.delete = !allActive;
            modPerms.view = !allActive;
        } else {
            modPerms[action] = !modPerms[action];
        }

        rolePerms[modKey] = modPerms;
        updated[currentRole] = rolePerms;
        setPermissionsState(updated);
    };

    const handleSavePermissions = () => {
        MySwal.fire({
            icon: "success",
            title: "Permissions Updated",
            text: `Permissions matrix for ${currentRole} successfully saved.`,
            confirmButtonColor: "#ff9f43",
        });
    };

    const renderTooltip = (props) => (
        <Tooltip id="pdf-tooltip" {...props}>
            Pdf
        </Tooltip>
    );
    const renderExcelTooltip = (props) => (
        <Tooltip id="excel-tooltip" {...props}>
            Excel
        </Tooltip>
    );
    const renderPrinterTooltip = (props) => (
        <Tooltip id="printer-tooltip" {...props}>
            Printer
        </Tooltip>
    );
    const renderRefreshTooltip = (props) => (
        <Tooltip id="refresh-tooltip" {...props}>
            Refresh
        </Tooltip>
    );

    return (
        <div>
            <div className="page-wrapper">
                <div className="content">
                    <div className="page-header">
                        <div className="add-item d-flex">
                            <div className="page-title">
                                <h4>Role Permissions Matrix</h4>
                                <h6>Configure module access rights by system role</h6>
                            </div>
                        </div>
                        <ul className="table-top-head">
                            <li>
                                <OverlayTrigger placement="top" overlay={renderTooltip}>
                                    <Link>
                                        <ImageWithBasePath src="assets/img/icons/pdf.svg" alt="img" />
                                    </Link>
                                </OverlayTrigger>
                            </li>
                            <li>
                                <OverlayTrigger placement="top" overlay={renderExcelTooltip}>
                                    <Link data-bs-toggle="tooltip" data-bs-placement="top">
                                        <ImageWithBasePath src="assets/img/icons/excel.svg" alt="img" />
                                    </Link>
                                </OverlayTrigger>
                            </li>
                            <li>
                                <OverlayTrigger placement="top" overlay={renderPrinterTooltip}>
                                    <Link data-bs-toggle="tooltip" data-bs-placement="top">
                                        <i data-feather="printer" className="feather-printer" />
                                    </Link>
                                </OverlayTrigger>
                            </li>
                            <li>
                                <OverlayTrigger placement="top" overlay={renderRefreshTooltip}>
                                    <Link data-bs-toggle="tooltip" data-bs-placement="top" onClick={() => setPermissionsState(DEFAULT_ROLE_PERMS)}>
                                        <RotateCcw />
                                    </Link>
                                </OverlayTrigger>
                            </li>
                        </ul>
                    </div>

                    <div className="card table-list-card">
                        <div className="card-body">
                            {/* Role Selection Banner */}
                            <div className="row align-items-center mb-3 p-3 bg-light rounded mx-0">
                                <div className="col-md-5">
                                    <label className="form-label small fw-bold mb-1 d-flex align-items-center gap-1">
                                        <Shield size={14} /> Active Role:
                                    </label>
                                    <Select
                                        className="select"
                                        options={rolesList}
                                        value={rolesList.find(r => r.value === currentRole)}
                                        onChange={handleRoleChange}
                                        placeholder="Choose Role"
                                    />
                                </div>
                                <div className="col-md-7 text-md-end mt-2 mt-md-0">
                                    <span className="badge bg-primary me-2">
                                        Configuring: {currentRole}
                                    </span>
                                    <button
                                        type="button"
                                        className="btn btn-sm btn-success"
                                        onClick={handleSavePermissions}
                                    >
                                        <Save size={14} className="me-1" /> Save Permissions
                                    </button>
                                </div>
                            </div>

                            <div className="table-responsive">
                                <table className="table datanew">
                                    <thead>
                                        <tr>
                                            <th>Modules</th>
                                            <th>Create</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                            <th>View</th>
                                            <th className="no-sort">Allow All</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {SYSTEM_MODULES.map((mod) => {
                                            const perm = activePerms[mod.key] || { create: false, edit: false, delete: false, view: false };
                                            const allChecked = perm.create && perm.edit && perm.delete && perm.view;

                                            return (
                                                <tr key={mod.key}>
                                                    <td className="fw-semibold text-dark">
                                                        {mod.name}
                                                    </td>
                                                    <td>
                                                        <label className="checkboxs">
                                                            <input
                                                                type="checkbox"
                                                                checked={!!perm.create}
                                                                onChange={() => handlePermToggle(mod.key, "create")}
                                                            />
                                                            <span className="checkmarks" />
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label className="checkboxs">
                                                            <input
                                                                type="checkbox"
                                                                checked={!!perm.edit}
                                                                onChange={() => handlePermToggle(mod.key, "edit")}
                                                            />
                                                            <span className="checkmarks" />
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label className="checkboxs">
                                                            <input
                                                                type="checkbox"
                                                                checked={!!perm.delete}
                                                                onChange={() => handlePermToggle(mod.key, "delete")}
                                                            />
                                                            <span className="checkmarks" />
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label className="checkboxs">
                                                            <input
                                                                type="checkbox"
                                                                checked={!!perm.view}
                                                                onChange={() => handlePermToggle(mod.key, "view")}
                                                            />
                                                            <span className="checkmarks" />
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label className="checkboxs">
                                                            <input
                                                                type="checkbox"
                                                                checked={allChecked}
                                                                onChange={() => handlePermToggle(mod.key, "all")}
                                                            />
                                                            <span className="checkmarks" />
                                                        </label>
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
            </div>
        </div>
    )
}

export default Permissions
