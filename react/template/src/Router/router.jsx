import React from "react";
import { Route, Routes } from "react-router-dom";
import Header from "../InitialPage/Sidebar/Header";
import Sidebar from "../InitialPage/Sidebar/Sidebar";
import { pagesRoute, posRoutes, publicRoutes } from "./router.link";
import { Outlet } from "react-router-dom";
import { useSelector } from "react-redux";
import ThemeSettings from "../InitialPage/themeSettings";
// import CollapsedSidebar from "../InitialPage/Sidebar/collapsedSidebar";
import Loader from "../feature-module/loader/loader";
import Signin from "../feature-module/pages/login/signin";

const AllRoutes = () => {
  const data = useSelector((state) => state.toggle_header);
  // const layoutStyles = useSelector((state) => state.layoutstyledata);
  const HeaderLayout = () => (
    <div className={`main-wrapper ${data ? "header-collapse" : ""}`}>
      <Header />
      <Sidebar />
      <Outlet />
      <ThemeSettings />
      <Loader />
    </div>
  );

  const Authpages = () => (
    <div className={data ? "header-collapse" : ""}>
      <Outlet />
      <Loader />
      <ThemeSettings />
    </div>
  );

  const Pospages = () => (
    <div>
      <Header />
      <Outlet />
      <Loader />
      <ThemeSettings />
    </div>
  );

  return (
    <div>
      <Routes>
        <Route path="/pos" element={<Pospages />}>
          {posRoutes.map((route, id) => (
            <Route path={route.path} element={route.element} key={id} />
          ))}
        </Route>

        {/* Auth routes with Signin as default landing page */}
        <Route path="/" element={<Authpages />}>
          <Route index element={<Signin />} />
          {pagesRoute.map((route, id) => (
            <Route path={route.path} element={route.element} key={id} />
          ))}
        </Route>

        {/* Admin and feature modules */}
        <Route path="/" element={<HeaderLayout />}>
          {publicRoutes.map((route, id) => (
            <Route path={route.path} element={route.element} key={id} />
          ))}
        </Route>
      </Routes>
    </div>
  );
};

export default AllRoutes;
