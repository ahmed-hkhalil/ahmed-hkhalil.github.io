// Centralized Role-Based Access Control (RBAC) and Authentication Manager
// For FutureProcessing POS & Fuel Management System

export const ROLES = {
  ADMIN: "admin",
  CASHIER: "cashier",
  MANAGER: "manager",
};

// Default system accounts
export const SYSTEM_ACCOUNTS = {
  admin: {
    id: "USR-001",
    name: "Store Administrator",
    email: "admin@futureprocessing.com",
    role: "admin",
    roleTitle: "Super Admin",
    storeId: "STORE-101",
    storeName: "Store #101 - Main Highway & Fuel Station",
    phone: "+1 (555) 019-2831",
    shift: "Full System Management (All Shifts)",
    permissions: ["all"],
  },
  cashier: {
    id: "USR-002",
    name: "Cashier Station #1",
    email: "cashier@futureprocessing.com",
    role: "cashier",
    roleTitle: "POS Cashier",
    storeId: "STORE-101",
    storeName: "Store #101 - Main Highway & Fuel Station",
    terminal: "Register Terminal #1",
    phone: "+1 (555) 014-9922",
    shift: "Day Shift (07:00 AM - 03:30 PM)",
    permissions: ["pos", "daily_sheet", "profile"],
  },
};

// Check whether user is logged in
export const isAuthenticated = () => {
  return localStorage.getItem("authenticated") === "true";
};

// Get current logged-in user profile
export const getCurrentUser = () => {
  if (!isAuthenticated()) return null;

  const role = localStorage.getItem("userRole") || "admin";
  const defaultAcc = SYSTEM_ACCOUNTS[role] || SYSTEM_ACCOUNTS.cashier;

  return {
    id: localStorage.getItem("userId") || defaultAcc.id,
    name: localStorage.getItem("userName") || defaultAcc.name,
    email: localStorage.getItem("userEmail") || defaultAcc.email,
    role: role,
    roleTitle: role === "admin" ? "Super Admin" : "POS Cashier",
    storeId: localStorage.getItem("userStoreId") || defaultAcc.storeId,
    storeName: localStorage.getItem("userStoreName") || defaultAcc.storeName,
    terminal: defaultAcc.terminal || "Station #1",
    phone: localStorage.getItem("userPhone") || defaultAcc.phone,
    shift: defaultAcc.shift,
    permissions: defaultAcc.permissions,
  };
};

// Routes allowed for Cashier role
export const CASHIER_ALLOWED_PATHS = [
  "/pos",
  "/daily-sheet",
  "/profile",
];

// Check if a path can be accessed by the given role
export const canAccessPath = (pathname, role) => {
  if (!role) return false;
  if (role === ROLES.ADMIN) return true; // Admin has full access to all paths

  if (role === ROLES.CASHIER) {
    const cleanPath = pathname.split("?")[0].split("#")[0].replace(/\/$/, "");
    return CASHIER_ALLOWED_PATHS.some((allowed) => {
      const cleanAllowed = allowed.replace(/\/$/, "");
      return cleanPath === cleanAllowed;
    });
  }

  return false;
};

// Log in user and persist session
export const loginUser = (role = "admin", customEmail = "", customName = "") => {
  const account = SYSTEM_ACCOUNTS[role] || SYSTEM_ACCOUNTS.admin;
  localStorage.setItem("authenticated", "true");
  localStorage.setItem("userRole", role);
  localStorage.setItem("userName", customName || account.name);
  localStorage.setItem("userEmail", customEmail || account.email);
  localStorage.setItem("userId", account.id);
  localStorage.setItem("userStoreId", account.storeId);
  localStorage.setItem("userStoreName", account.storeName);
  localStorage.setItem("userPhone", account.phone);
};

// Log out user and clean up session
export const logoutUser = () => {
  localStorage.removeItem("authenticated");
  localStorage.removeItem("userRole");
  localStorage.removeItem("userName");
  localStorage.removeItem("userEmail");
  localStorage.removeItem("userId");
  localStorage.removeItem("userStoreId");
  localStorage.removeItem("userStoreName");
  localStorage.removeItem("userPhone");
};
