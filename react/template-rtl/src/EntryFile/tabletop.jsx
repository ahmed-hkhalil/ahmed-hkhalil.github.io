/* eslint-disable no-unused-vars */
/* eslint-disable react/prop-types */
import React, { useState } from "react";
import { Link } from "react-router-dom";
import { Tooltip as ReactTooltip } from 'react-tooltip';

import {
    ClosesIcon,
    Excel,
    Filter,
    Pdf,
    Printer,
    Search
  } from "../EntryFile/imagePath";
import ImageWithBasePath from "../core/img/imagewithbasebath";

const Tabletop = ({inputfilter,togglefilter}) => {
  return (
    <div className="table-top">
      <div className="search-set">
        <div className="search-path">
          <Link
            className={` btn ${
              inputfilter ? "btn-filter setclose" : "btn-filter"
            } `}
            id="filter_search"
            onClick={() => togglefilter(!inputfilter)}
          >
            <ImageWithBasePath src={Filter} alt="img" />
            <span>
              <ImageWithBasePath src={ClosesIcon} alt="img" />
            </span>
          </Link>
        </div>
        <div className="search-input">
          <input
            className="form-control form-control-sm search-icon"
            type="search"
            placeholder="Search..."
          />
          <Link to="#" className="btn btn-searchset">
            <ImageWithBasePath src={Search} alt="img" />
          </Link>
        </div>
      </div>
      <div className="wordset">
        <ul>
          <ReactTooltip place="top" type="dark" effect="solid" />
          <li>
            <Link data-tip="Pdf">
              <ImageWithBasePath src={Pdf} alt="img" />
            </Link>
          </li>
          <li>
            <Link data-tip="Excel">
              <ImageWithBasePath src={Excel} alt="img" />
            </Link>
          </li>
          <li>
            <Link data-tip="Print">
              <ImageWithBasePath src={Printer} alt="img" />
            </Link>
          </li>
        </ul>
      </div>
    </div>
  );
};

export default Tabletop;
