import React, { useState } from "react";
import ImageWithBasePath from "../../core/img/imagewithbasebath";
import { Link } from "react-router-dom";
import Swal from "sweetalert2";
import withReactContent from "sweetalert2-react-content";
import { getCurrentUser, ROLES } from "../../core/auth";
import { User, Shield, CheckCircle, ArrowLeft, Save } from "react-feather";

const MySwal = withReactContent(Swal);

const Profile = () => {
  const currentUser = getCurrentUser();
  const isCashier = currentUser?.role === ROLES.CASHIER;

  const [userName, setUserName] = useState(currentUser?.name || "");
  const [email, setEmail] = useState(currentUser?.email || "");
  const [phone, setPhone] = useState(currentUser?.phone || "+1 (555) 014-9922");
  const [password, setPassword] = useState("••••••••");
  const [showPassword, setShowPassword] = useState(false);

  const handleSaveProfile = (e) => {
    e.preventDefault();
    localStorage.setItem("userName", userName);
    localStorage.setItem("userEmail", email);
    localStorage.setItem("userPhone", phone);

    MySwal.fire({
      icon: "success",
      title: "Profile Updated!",
      text: "Your profile details have been successfully saved.",
      confirmButtonColor: "#ff9f43",
    });
  };

  return (
    <div className="page-wrapper">
      <div className="content">
        <div className="page-header d-flex justify-content-between align-items-center mb-3">
          <div className="page-title">
            <h4>User Profile & Security</h4>
            <h6>Manage your account credentials and system privileges</h6>
          </div>
          <Link
            to={isCashier ? "/pos" : "/dashboard"}
            className="btn btn-outline-secondary btn-sm d-flex align-items-center gap-1"
          >
            <ArrowLeft size={14} /> Back to {isCashier ? "POS" : "Dashboard"}
          </Link>
        </div>

        <div className="card shadow-sm border-0">
          <div className="card-body">
            <div className="profile-set">
              <div className="profile-head"></div>
              <div className="profile-top">
                <div className="profile-content">
                  <div className="profile-contentimg">
                    <ImageWithBasePath
                      src="assets/img/profiles/avator1.jpg"
                      alt="avatar"
                      id="blah"
                    />
                    <div className="profileupload">
                      <input type="file" id="imgInp" />
                      <Link to="#">
                        <ImageWithBasePath
                          src="assets/img/icons/edit-set.svg"
                          alt="edit"
                        />
                      </Link>
                    </div>
                  </div>
                  <div className="profile-contentname">
                    <h2 className="mb-1">{userName}</h2>
                    <div className="d-flex align-items-center gap-2">
                      <span
                        className={`badge ${
                          isCashier ? "bg-warning text-dark" : "bg-primary text-white"
                        }`}
                      >
                        <Shield size={12} className="me-1" />
                        {currentUser?.roleTitle || (isCashier ? "POS Cashier" : "Super Admin")}
                      </span>
                      <span className="badge bg-light text-muted border">
                        <CheckCircle size={12} className="me-1 text-success" /> Active Account
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            {/* Role & Store Privilege Callout */}
            <div className="row mt-3 mb-4">
              <div className="col-12">
                <div className="p-3 bg-light rounded border">
                  <div className="row g-2">
                    <div className="col-md-4">
                      <small className="text-muted d-block">Assigned Station / Store</small>
                      <strong className="text-dark">{currentUser?.storeName}</strong>
                    </div>
                    <div className="col-md-4">
                      <small className="text-muted d-block">Terminal / Station ID</small>
                      <strong className="text-dark">
                        {isCashier ? currentUser?.terminal || "Register #1" : "HQ Administrator Terminal"}
                      </strong>
                    </div>
                    <div className="col-md-4">
                      <small className="text-muted d-block">Assigned Shift Schedule</small>
                      <strong className="text-dark">{currentUser?.shift}</strong>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <form onSubmit={handleSaveProfile}>
              <div className="row g-3">
                <div className="col-lg-6 col-sm-12">
                  <div className="input-blocks">
                    <label className="form-label">Full Name</label>
                    <input
                      type="text"
                      className="form-control"
                      value={userName}
                      onChange={(e) => setUserName(e.target.value)}
                      required
                    />
                  </div>
                </div>

                <div className="col-lg-6 col-sm-12">
                  <div className="input-blocks">
                    <label className="form-label">Role / Designation (System Assigned)</label>
                    <input
                      type="text"
                      className="form-control bg-light"
                      value={currentUser?.roleTitle}
                      readOnly
                      disabled
                    />
                  </div>
                </div>

                <div className="col-lg-6 col-sm-12">
                  <div className="input-blocks">
                    <label className="form-label">Email Address</label>
                    <input
                      type="email"
                      className="form-control"
                      value={email}
                      onChange={(e) => setEmail(e.target.value)}
                      required
                    />
                  </div>
                </div>

                <div className="col-lg-6 col-sm-12">
                  <div className="input-blocks">
                    <label className="form-label">Contact Phone</label>
                    <input
                      type="text"
                      className="form-control"
                      value={phone}
                      onChange={(e) => setPhone(e.target.value)}
                    />
                  </div>
                </div>

                <div className="col-lg-6 col-sm-12">
                  <div className="input-blocks">
                    <label className="form-label">Password</label>
                    <div className="pass-group">
                      <input
                        type={showPassword ? "text" : "password"}
                        className="pass-input form-control"
                        value={password}
                        onChange={(e) => setPassword(e.target.value)}
                      />
                      <span
                        className={`fas toggle-password ${
                          showPassword ? "fa-eye" : "fa-eye-slash"
                        }`}
                        onClick={() => setShowPassword(!showPassword)}
                        style={{ cursor: "pointer" }}
                      />
                    </div>
                  </div>
                </div>

                <div className="col-lg-6 col-sm-12">
                  <div className="input-blocks">
                    <label className="form-label">Permissions Summary</label>
                    <input
                      type="text"
                      className="form-control bg-light"
                      value={
                        isCashier
                          ? "Strict Cashier Scope: POS Terminal, Daily Reconciliation, Personal Profile"
                          : "Full Administrative Access: All modules, finance, users, settings"
                      }
                      readOnly
                      disabled
                    />
                  </div>
                </div>

                <div className="col-12 mt-4">
                  <button type="submit" className="btn btn-submit me-2">
                    <Save size={14} className="me-1" /> Save Changes
                  </button>
                  <Link
                    to={isCashier ? "/pos" : "/dashboard"}
                    className="btn btn-cancel"
                  >
                    Cancel
                  </Link>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  );
};

export default Profile;
