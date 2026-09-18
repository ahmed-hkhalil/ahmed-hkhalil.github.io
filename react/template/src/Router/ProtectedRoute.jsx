import React from "react";
import { Navigate, useLocation } from "react-router-dom";
import { isAuthenticated, getCurrentUser, canAccessPath, ROLES } from "../core/auth";

/**
 * ProtectedRoute Guard
 * - Enforces authentication on all non-public routes
 * - Enforces strict Role-Based Access Control (RBAC)
 * - Automatically redirects unauthorized users to their primary landing page
 */
const ProtectedRoute = ({ children, allowedRoles }) => {
  const location = useLocation();

  // 1. Authentication Check
  if (!isAuthenticated()) {
    // Save attempted location for redirection after login if needed
    return <Navigate to="/" state={{ from: location }} replace />;
  }

  const user = getCurrentUser();
  const role = user?.role || ROLES.CASHIER;

  // 2. Explicit Role List Check
  if (allowedRoles && allowedRoles.length > 0) {
    if (!allowedRoles.includes(role)) {
      if (role === ROLES.CASHIER) {
        return <Navigate to="/pos" replace />;
      }
      return <Navigate to="/dashboard" replace />;
    }
  }

  // 3. Path Access Check (Ensures Cashiers cannot browse Admin paths directly via URL)
  if (role === ROLES.CASHIER) {
    const isAllowed = canAccessPath(location.pathname, ROLES.CASHIER);
    if (!isAllowed) {
      return <Navigate to="/pos" replace />;
    }
  }

  return children;
};

export default ProtectedRoute;
