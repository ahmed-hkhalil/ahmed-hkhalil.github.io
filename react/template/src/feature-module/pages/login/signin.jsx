import React, { useState, useEffect } from "react";
import ImageWithBasePath from "../../../core/img/imagewithbasebath";
import { Link, useNavigate } from "react-router-dom";
import { all_routes } from "../../../Router/all_routes";
import { isAuthenticated, getCurrentUser, loginUser, ROLES } from "../../../core/auth";

const Signin = () => {
  const route = all_routes;
  const navigate = useNavigate();
  const [email, setEmail] = useState("admin@futureprocessing.com");
  const [password, setPassword] = useState("123456");
  const [showPassword, setShowPassword] = useState(false);
  const [selectedRole, setSelectedRole] = useState("admin"); // 'admin' or 'cashier'
  const [rememberMe, setRememberMe] = useState(true);

  // If already authenticated, redirect to appropriate landing page
  useEffect(() => {
    if (isAuthenticated()) {
      const user = getCurrentUser();
      if (user?.role === ROLES.CASHIER) {
        navigate("/pos", { replace: true });
      } else {
        navigate("/dashboard", { replace: true });
      }
    }
  }, [navigate]);

  const handleSubmit = (e) => {
    if (e) e.preventDefault();
    // Persist login session via centralized auth helper
    loginUser(selectedRole, email, selectedRole === "admin" ? "Store Administrator" : "Cashier Station #1");

    if (selectedRole === "cashier") {
      navigate(route.pos || "/pos");
    } else {
      navigate(route.dashboard || "/dashboard");
    }
  };

  const selectRoleAndFill = (role) => {
    setSelectedRole(role);
    if (role === "admin") {
      setEmail("admin@futureprocessing.com");
      setPassword("123456");
    } else {
      setEmail("cashier@futureprocessing.com");
      setPassword("123456");
    }
  };

  return (
    <div className="main-wrapper">
      <div className="account-content">
        <div className="login-wrapper bg-img">
          <div className="login-content">
            <form onSubmit={handleSubmit}>
              <div className="login-userset">
                <div className="login-logo logo-normal">
                  <ImageWithBasePath src="assets/img/logo.png" alt="FutureProcessing" />
                </div>
                <div className="login-userheading">
                  <h3>Sign In</h3>
                  <h4>Access FutureProcessing POS & Fuel Station Management</h4>
                </div>

                {/* Role Switcher */}
                <div className="mb-3 d-flex gap-2">
                  <button
                    type="button"
                    className={`btn w-50 ${selectedRole === "admin" ? "btn-primary" : "btn-outline-primary"}`}
                    onClick={() => selectRoleAndFill("admin")}
                  >
                    <i className="fas fa-user-shield me-2"></i>Admin
                  </button>
                  <button
                    type="button"
                    className={`btn w-50 ${selectedRole === "cashier" ? "btn-primary" : "btn-outline-primary"}`}
                    onClick={() => selectRoleAndFill("cashier")}
                  >
                    <i className="fas fa-cash-register me-2"></i>Cashier POS
                  </button>
                </div>

                <div className="form-login mb-3">
                  <label className="form-label">Email Address</label>
                  <div className="form-addons">
                    <input
                      type="email"
                      className="form-control"
                      value={email}
                      onChange={(e) => setEmail(e.target.value)}
                      required
                    />
                    <ImageWithBasePath
                      src="assets/img/icons/mail.svg"
                      alt="mail"
                    />
                  </div>
                </div>

                <div className="form-login mb-3">
                  <label className="form-label">Password</label>
                  <div className="pass-group">
                    <input
                      type={showPassword ? "text" : "password"}
                      className="pass-input form-control"
                      value={password}
                      onChange={(e) => setPassword(e.target.value)}
                      required
                    />
                    <span
                      className={`fas toggle-password ${showPassword ? "fa-eye" : "fa-eye-slash"}`}
                      onClick={() => setShowPassword(!showPassword)}
                      style={{ cursor: "pointer" }}
                    />
                  </div>
                </div>

                <div className="form-login authentication-check">
                  <div className="row">
                    <div className="col-12 d-flex align-items-center justify-content-between">
                      <div className="custom-control custom-checkbox">
                        <label className="checkboxs ps-4 mb-0 pb-0 line-height-1">
                          <input
                            type="checkbox"
                            className="form-control"
                            checked={rememberMe}
                            onChange={(e) => setRememberMe(e.target.checked)}
                          />
                          <span className="checkmarks" />
                          Remember me
                        </label>
                      </div>
                      <div className="text-end">
                        <Link className="forgot-link" to={route.forgotPassword || "/forgot-password"}>
                          Forgot Password?
                        </Link>
                      </div>
                    </div>
                  </div>
                </div>

                <div className="form-login">
                  <button type="submit" className="btn btn-login w-100">
                    {selectedRole === "admin" ? "Sign In to Admin Dashboard" : "Open Cashier POS Screen"}
                  </button>
                </div>

                <div className="signinform">
                  <h4>
                    New store manager?{" "}
                    <Link to={route.register || "/register"} className="hover-a">
                      Create an account
                    </Link>
                  </h4>
                </div>

                <div className="my-4 d-flex justify-content-center align-items-center copyright-text">
                  <p>Copyright © 2026 FutureProcessing. All rights reserved</p>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  );
};

export default Signin;
