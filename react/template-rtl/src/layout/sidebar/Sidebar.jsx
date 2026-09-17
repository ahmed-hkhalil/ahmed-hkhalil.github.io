import React, { useState } from "react";
import Scrollbars from "react-custom-scrollbars-2";
import { useSelector } from "react-redux";
import { Link, useLocation } from "react-router-dom";
import { SidebarData } from "../../core/json/siderbar_data";

const Sidebar = () => {
  const sidebarData = useSelector((state) => state.sidebar_data);
  console.log(sidebarData, "sidebar");

  const Location = useLocation();

  console.log("Location.pathname", Location.pathname);

  const [subOpen, setSubopen] = useState("");
  const [subsidebar, setSubsidebar] = useState("");

  const toggleSidebar = (title) => {
    if (title == subOpen) {
      setSubopen("");
    } else {
      setSubopen(title);
    }
  };

  const toggleSubsidebar = (subitem) => {
    console.log("subitem", subitem);
    if (subitem == subsidebar) {
      setSubsidebar("");
    } else {
      setSubsidebar(subitem);
    }
  };

  console.log("subsidebar", subsidebar);

  return (
    <div className="sidebar" id="sidebar">
      test
      <Scrollbars>
        <div className="sidebar-inner slimscroll">
          <div id="sidebar-menu" className="sidebar-menu">
            <ul>
              {SidebarData?.map((mainLabel, index) => (
                <li className="submenu-open" key={index}>
                  <h6 className="submenu-hdr">{mainLabel?.label}aaaaaa</h6>

                  <ul>
                    {mainLabel?.submenuItems?.map((title, i) => (
                      <li className="submenu" key={i}>
                        <Link
                          to={title?.link}
                          onClick={() => toggleSidebar(title?.label)}
                          className={`${
                            subOpen == title?.label ? "subdrop" : ""
                          } ${
                            title?.submenuItems
                              ?.map((link) => link.link)
                              .includes(Location.pathname) ||
                            title?.link == Location.pathname
                              ? "active"
                              : ""
                          }`}
                        >
                          {/* <Grid /> */}
                          {title?.icon} {title?.link}
                          <span>{title?.label}</span>
                          <span
                            className={title?.submenu ? "menu-arrow" : ""}
                          />
                        </Link>
                        <ul
                          style={{
                            display: subOpen == title?.label ? "block" : "none",
                          }}
                        >
                          {title?.submenuItems?.map((item, titleIndex) => (
                            <li
                              className="submenu submenu-two"
                              key={titleIndex}
                            >
                              {/* {item.lebel} */}
                              <Link
                                to={item?.link}
                                // className={
                                //   Location.pathname == item?.link
                                //     ? "active"
                                //     : ""
                                // }
                                className={
                                  item?.submenuItems?.submenuItems
                                    ?.map((link) => link.link)
                                    .includes(Location.pathname) ||
                                  item?.link == Location.pathname
                                    ? "active"
                                    : ""
                                }
                                onClick={() => {
                                  toggleSubsidebar(item?.label);
                                }}
                              >
                                {item?.label}
                                <span
                                  className={item?.submenu ? "menu-arrow" : ""}
                                />
                              </Link>
                              <ul
                                style={{
                                  display:
                                    subsidebar == item?.label
                                      ? "block"
                                      : "none",
                                }}
                              >
                                {item?.submenuItems?.map(
                                  (items, titleIndex) => (
                                    <li key={titleIndex}>
                                      {/* {item.lebel} */}
                                      <Link
                                        to={items?.link}
                                        className={`${
                                          subsidebar == items?.label
                                            ? "submenu-two subdrop"
                                            : "submenu-two"
                                        } ${
                                          items?.submenuItems
                                            ?.map((link) => link.link)
                                            .includes(Location.pathname) ||
                                          items?.link == Location.pathname
                                            ? "active"
                                            : ""
                                        }`}
                                      >
                                        {items?.label}
                                      </Link>
                                    </li>
                                  )
                                )}
                              </ul>
                            </li>
                          ))}
                        </ul>
                      </li>
                    ))}
                  </ul>
                </li>
              ))}
            </ul>
          </div>
        </div>
      </Scrollbars>
    </div>
  );
};

export default Sidebar;
