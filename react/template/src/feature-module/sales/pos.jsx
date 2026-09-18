import React, { useState, useEffect } from 'react'
import { Link } from 'react-router-dom'
import { getProducts, saveSale } from '../../core/supabaseClient'
import ImageWithBasePath from '../../core/img/imagewithbasebath'
import { RefreshCcw, RotateCw, ShoppingCart } from 'feather-icons-react/build/IconComponents'
import { Check, CheckCircle, Edit, MoreVertical, Trash2, UserPlus } from 'react-feather'
import Select from 'react-select'
import PlusCircle from 'feather-icons-react/build/IconComponents/PlusCircle'
import MinusCircle from 'feather-icons-react/build/IconComponents/MinusCircle'
import { OverlayTrigger, Tooltip } from 'react-bootstrap'
import withReactContent from 'sweetalert2-react-content'
import Swal from 'sweetalert2'
import Slider from 'react-slick'
import 'slick-carousel/slick/slick.css';
import 'slick-carousel/slick/slick-theme.css';


const Pos = () => {
  const customers = [
    { value: 'walkInCustomer', label: 'Walk in Customer' },
    { value: 'john', label: 'John' },
    { value: 'smith', label: 'Smith' },
    { value: 'ana', label: 'Ana' },
    { value: 'elza', label: 'Elza' },
  ];
  const products = [
    { value: 'walkInCustomer', label: 'Walk in Customer' },
    { value: 'john', label: 'John' },
    { value: 'smith', label: 'Smith' },
    { value: 'ana', label: 'Ana' },
    { value: 'elza', label: 'Elza' },
  ];
  const gst = [
    { value: '5', label: 'GST 5%' },
    { value: '10', label: 'GST 10%' },
    { value: '15', label: 'GST 15%' },
    { value: '20', label: 'GST 20%' },
    { value: '25', label: 'GST 25%' },
    { value: '30', label: 'GST 30%' },
  ];
  const shipping = [
    { value: '15', label: '15' },
    { value: '20', label: '20' },
    { value: '25', label: '25' },
    { value: '30', label: '30' },
  ];
  const discount = [
    { value: '10', label: '10%' },
    { value: '15', label: '15%' },
    { value: '20', label: '20%' },
    { value: '25', label: '25%' },
    { value: '30', label: '30%' },
  ];
  const tax = [
    { value: 'exclusive', label: 'Exclusive' },
    { value: 'inclusive', label: 'Inclusive' },
  ];
  const discounttype = [
    { value: 'percentage', label: 'Percentage' },
    { value: 'earlyPaymentDiscounts', label: 'Early payment discounts' },
  ];
  const units = [
    { value: 'kilogram', label: 'Kilogram' },
    { value: 'grams', label: 'Grams' },
  ];
  const [quantity, setQuantity] = useState(4);
  const [quantity1, setQuantity1] = useState(3);
  const [quantity2, setQuantity2] = useState(3);
  const [quantity3, setQuantity3] = useState(1);

  const handleDecrement = () => { if (quantity > 1) setQuantity(quantity - 1); };
  const handleIncrement = () => { setQuantity(quantity + 1); };
  const handleDecrement1 = () => { if (quantity1 > 1) setQuantity1(quantity1 - 1); };
  const handleIncrement1 = () => { setQuantity1(quantity1 + 1); };
  const handleDecrement2 = () => { if (quantity2 > 1) setQuantity2(quantity2 - 1); };
  const handleIncrement2 = () => { setQuantity2(quantity2 + 1); };
  const handleDecrement3 = () => { if (quantity3 > 1) setQuantity3(quantity3 - 1); };
  const handleIncrement3 = () => { setQuantity3(quantity3 + 1); };

  // Supabase Dynamic State
  const [dbProducts, setDbProducts] = useState([]);
  const [loadingProducts, setLoadingProducts] = useState(true);
  const [cart, setCart] = useState([]);
  const [activePaymentMethod, setActivePaymentMethod] = useState("Cash");
  const [isSubmitting, setIsSubmitting] = useState(false);

  // Fuel Station Dispenser POS Integration
  const [showFuelModal, setShowFuelModal] = useState(false);
  const [selectedPump, setSelectedPump] = useState(1);
  const [selectedFuelGrade, setSelectedFuelGrade] = useState("Gasoline 95");
  const [fuelPricing, setFuelPricing] = useState({
    "Gasoline 91": 2.18,
    "Gasoline 95": 2.33,
    "Diesel": 1.15,
  });
  const [presetAmount, setPresetAmount] = useState(30);
  const [presetLiters, setPresetLiters] = useState(12.88);

  const handleFuelAmountChange = (amt) => {
    const val = parseFloat(amt) || 0;
    setPresetAmount(val);
    const unitPrice = fuelPricing[selectedFuelGrade] || 2.33;
    setPresetLiters(parseFloat((val / unitPrice).toFixed(2)));
  };

  const handleFuelLitersChange = (lts) => {
    const val = parseFloat(lts) || 0;
    setPresetLiters(val);
    const unitPrice = fuelPricing[selectedFuelGrade] || 2.33;
    setPresetAmount(parseFloat((val * unitPrice).toFixed(2)));
  };

  const handleGradeChange = (grade) => {
    setSelectedFuelGrade(grade);
    const unitPrice = fuelPricing[grade] || 2.33;
    setPresetLiters(parseFloat((presetAmount / unitPrice).toFixed(2)));
  };

  const addFuelToCart = () => {
    if (presetAmount <= 0) {
      MySwal.fire("Warning", "Please enter a valid fuel amount.", "warning");
      return;
    }
    const fuelItem = {
      id: "fuel-p" + selectedPump + "-" + Date.now(),
      sku: "PUMP-0" + selectedPump,
      name: "⛽ Fuel Pump #" + selectedPump + " (" + selectedFuelGrade + ", " + presetLiters + " L)",
      price: presetAmount,
      qty: 1,
      isFuel: true,
      pump: selectedPump,
      grade: selectedFuelGrade,
      liters: presetLiters,
    };
    setCart((prev) => [...prev, fuelItem]);
    setShowFuelModal(false);
    MySwal.fire({
      icon: "success",
      title: "Pump #" + selectedPump + " Fuel Added",
      text: presetLiters + " Liters of " + selectedFuelGrade + " ($" + presetAmount.toFixed(2) + ") added to ticket.",
      timer: 1500,
      showConfirmButton: false,
    });
  };

  useEffect(() => {
    let isMounted = true;
    async function loadData() {
      try {
        setLoadingProducts(true);
        const data = await getProducts();
        if (isMounted) {
          setDbProducts(data || []);
        }
      } catch (err) {
        console.error("Error loading products:", err);
      } finally {
        if (isMounted) setLoadingProducts(false);
      }
    }
    loadData();
    return () => { isMounted = false; };
  }, []);

  const addToCart = (product) => {
    setCart((prevCart) => {
      const existingIndex = prevCart.findIndex((item) => item.id === product.id);
      if (existingIndex > -1) {
        const updated = [...prevCart];
        updated[existingIndex] = {
          ...updated[existingIndex],
          qty: updated[existingIndex].qty + 1,
        };
        return updated;
      }
      return [...prevCart, { ...product, qty: 1 }];
    });
  };

  const updateQty = (productId, delta) => {
    setCart((prevCart) =>
      prevCart
        .map((item) => {
          if (item.id === productId) {
            const newQty = item.qty + delta;
            return newQty > 0 ? { ...item, qty: newQty } : null;
          }
          return item;
        })
        .filter(Boolean)
    );
  };

  const removeFromCart = (productId) => {
    setCart((prevCart) => prevCart.filter((item) => item.id !== productId));
  };

  const clearCart = () => setCart([]);

  const subtotal = cart.reduce((sum, item) => sum + (parseFloat(item.price) || 0) * item.qty, 0);
  const taxAmount = subtotal * 0.05;
  const grandTotal = subtotal + taxAmount;

  const handleCompleteSale = async (paymentType = activePaymentMethod) => {
    if (cart.length === 0) {
      MySwal.fire({
        icon: 'warning',
        title: 'Cart is empty',
        text: 'Please tap a product to add it to your order before checkout.',
      });
      return;
    }

    try {
      setIsSubmitting(true);
      await saveSale({
        cashierName: "Cashier (Online)",
        totalAmount: grandTotal,
        paymentMethod: paymentType || "Cash",
        items: cart.map(item => ({
          id: item.id,
          sku: item.sku,
          name: item.name,
          price: item.price,
          qty: item.qty,
          subtotal: parseFloat(item.price) * item.qty
        })),
      });

      MySwal.fire({
        icon: 'success',
        title: 'Payment Successful!',
        html: `<p class="text-success fw-bold">Order successfully saved to Supabase!</p><p>Total Paid: <strong>$${grandTotal.toFixed(2)}</strong> (${paymentType})</p>`,
        confirmButtonText: 'Next Customer / Order',
        confirmButtonColor: '#28a745'
      });
      clearCart();
    } catch (err) {
      MySwal.fire({
        icon: 'error',
        title: 'Payment Failed',
        text: err.message || 'Could not save transaction to database.',
      });
    } finally {
      setIsSubmitting(false);
    }
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

  const settings = {
    dots: false,
    autoplay: false,
    slidesToShow: 5,
    margin:0,
    speed: 500,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 5,
        },
      },
      {
        breakpoint: 800,
        settings: {
          slidesToShow: 5,
        },
      },
      {
        breakpoint: 776,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 567,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  };
  const MySwal = withReactContent(Swal);

  const showConfirmationAlert = () => {
    MySwal.fire({
      title: 'Are you sure?',
      text: 'You won\'t be able to revert this!',
      showCancelButton: true,
      confirmButtonColor: '#00ff00',
      confirmButtonText: 'Yes, delete it!',
      cancelButtonColor: '#ff0000',
      cancelButtonText: 'Cancel',
    }).then((result) => {
      if (result.isConfirmed) {

        MySwal.fire({
          title: 'Deleted!',
          text: 'Your file has been deleted.',
          className: "btn btn-success",
          confirmButtonText: 'OK',
          customClass: {
            confirmButton: 'btn btn-success',
          },
        });
      } else {
        MySwal.close();
      }

    });
  };
  return (
    <div>
      <div className="page-wrapper pos-pg-wrapper ms-0">
        <div className="content pos-design p-0">
          <div className="btn-row d-sm-flex align-items-center gap-2 p-3 pb-0">
            <button
              type="button"
              className="btn btn-success d-flex align-items-center gap-2 px-3 shadow-sm"
              onClick={() => setShowFuelModal(true)}
            >
              <span>⛽</span>
              <strong>Dispense Fuel (Pumps 1-8)</strong>
            </button>
            <Link
              to="#"
              className="btn btn-secondary mb-xs-3"
              data-bs-toggle="modal"
              data-bs-target="#orders"
            >
              <span className="me-1 d-flex align-items-center">
                <ShoppingCart className="feather-16" />
              </span>
              View Orders
            </Link>
            <button type="button" className="btn btn-info" onClick={clearCart}>
              <span className="me-1 d-flex align-items-center">
                <RotateCw className="feather-16" />
              </span>
              Clear Cart
            </button>
            <Link
              to="#"
              className="btn btn-primary"
              data-bs-toggle="modal"
              data-bs-target="#recents"
            >
              <span className="me-1 d-flex align-items-center">
                <RefreshCcw className="feather-16" />
              </span>
              Transaction
            </Link>
            <Link to="/fuel-dashboard" className="btn btn-warning text-dark">
              <span>⛽</span> Fuel Hub
            </Link>
          </div>

          {/* Quick Forecourt Pump Status Bar */}
          <div className="bg-white p-2 border rounded my-2 mx-3 d-flex flex-wrap align-items-center justify-content-between gap-1 shadow-sm">
            <span className="fw-bold small text-muted me-2">⛽ Forecourt Dispensers:</span>
            <div className="d-flex flex-wrap gap-1 flex-grow-1">
              {[1, 2, 3, 4, 5, 6, 7, 8].map((pId) => (
                <button
                  key={pId}
                  type="button"
                  className={`btn btn-sm py-1 px-2 ${
                    pId === 1 || pId === 3 || pId === 7
                      ? "btn-outline-success"
                      : pId === 8
                      ? "btn-outline-secondary"
                      : "btn-outline-primary"
                  }`}
                  onClick={() => {
                    setSelectedPump(pId);
                    setShowFuelModal(true);
                  }}
                  title={`Open Dispenser Pump #${pId}`}
                >
                  <span className="fw-bold">Pump {pId}</span>{" "}
                  <small style={{ fontSize: "11px" }}>
                    {pId === 1 || pId === 3 || pId === 7 ? "🟢 Active" : pId === 8 ? "⚪ Off" : "🔵 Idle"}
                  </small>
                </button>
              ))}
            </div>
          </div>
          <div className="row align-items-start pos-wrapper">
            <div className="col-md-12 col-lg-8">
              <div className="pos-categories tabs_wrapper">
                <h5>Categories</h5>
                <p>Select From Below Categories</p>
                <Slider {...settings} className='tabs owl-carousel pos-category'>
                  <div id="all" className='pos-slick-item'>
                    <Link to="#">
                      <ImageWithBasePath src="assets/img/categories/category-01.png" alt="Categories" />
                    </Link>
                    <h6>
                      <Link to="#">All Categories</Link>
                    </h6>
                    <span>80 Items</span>
                  </div>
                  <div id="headphones" className='pos-slick-item'>
                    <Link to="#">
                      <ImageWithBasePath src="assets/img/categories/category-02.png" alt="Categories" />
                    </Link>
                    <h6>
                      <Link to="#">Headphones</Link>
                    </h6>
                    <span>4 Items</span>
                  </div>
                  <div id="shoes" className='pos-slick-item'>
                    <Link to="#">
                      <ImageWithBasePath src="assets/img/categories/category-03.png" alt="Categories" />
                    </Link>
                    <h6>
                      <Link to="#">Shoes</Link>
                    </h6>
                    <span>14 Items</span>
                  </div>
                  <div id="mobiles" className='pos-slick-item'>
                    <Link to="#">
                      <ImageWithBasePath src="assets/img/categories/category-04.png" alt="Categories" />
                    </Link>
                    <h6>
                      <Link to="#">Mobiles</Link>
                    </h6>
                    <span>7 Items</span>
                  </div>
                  <div id="watches" className='pos-slick-item'>
                    <Link to="#">
                      <ImageWithBasePath src="assets/img/categories/category-05.png" alt="Categories" />
                    </Link>
                    <h6>
                      <Link to="#">Watches</Link>
                    </h6>
                    <span>16 Items</span>
                  </div>
                  <div id="laptops" className='pos-slick-item'>
                    <Link to="#">
                      <ImageWithBasePath src="assets/img/categories/category-06.png" alt="Categories" />
                    </Link>
                    <h6>
                      <Link to="#">Laptops</Link>
                    </h6>
                    <span>18 Items</span>
                  </div>
                  <div id="allcategory" className='pos-slick-item'>
                    <Link to="#">
                      <ImageWithBasePath src="assets/img/categories/category-01.png" alt="Categories" />
                    </Link>
                    <h6>
                      <Link to="#">All Categories</Link>
                    </h6>
                    <span>80 Items</span>
                  </div>
                  <div id="headphone" className='pos-slick-item'>
                    <Link to="#">
                      <ImageWithBasePath src="assets/img/categories/category-02.png" alt="Categories" />
                    </Link>
                    <h6>
                      <Link to="#">Headphones</Link>
                    </h6>
                    <span>4 Items</span>
                  </div>
                  <div id="shoe" className='pos-slick-item'>
                    <Link to="#">
                      <ImageWithBasePath src="assets/img/categories/category-03.png" alt="Categories" />
                    </Link>
                    <h6>
                      <Link to="#">Shoes</Link>
                    </h6>
                    <span>14 Items</span>
                  </div>
                  <div id="mobile" className='pos-slick-item'>
                    <Link to="#">
                      <ImageWithBasePath src="assets/img/categories/category-04.png" alt="Categories" />
                    </Link>
                    <h6>
                      <Link to="#">Mobiles</Link>
                    </h6>
                    <span>7 Items</span>
                  </div>
                  <div id="watche" className='pos-slick-item'>
                    <Link to="#">
                      <ImageWithBasePath src="assets/img/categories/category-05.png" alt="Categories" />
                    </Link>
                    <h6>
                      <Link to="#">Watches</Link>
                    </h6>
                    <span>16 Items</span>
                  </div>
                  <div id="laptop" className='pos-slick-item'>
                    <Link to="#">
                      <ImageWithBasePath src="assets/img/categories/category-06.png" alt="Categories" />
                    </Link>
                    <h6>
                      <Link to="#">Laptops</Link>
                    </h6>
                    <span>18 Items</span>
                  </div>
                  </Slider>
                <div className="pos-products">
                  <div className="d-flex align-items-center justify-content-between">
                    <h5 className="mb-3">Products</h5>
                  </div>
                  <div className="tabs_container">
                    <div className="tab_content active" data-tab="all">
                      <div className="row">
                        {loadingProducts ? (
                          <div className="col-12 text-center py-5">
                            <div className="spinner-border text-primary" role="status">
                              <span className="visually-hidden">Loading products from Supabase...</span>
                            </div>
                            <p className="mt-2 text-muted fw-semibold">Loading live catalog from Supabase database...</p>
                          </div>
                        ) : dbProducts.length === 0 ? (
                          <div className="col-12 text-center py-5">
                            <p className="text-muted">No products found in database.</p>
                          </div>
                        ) : (
                          dbProducts.map((prod, idx) => {
                            const imgNum = String((idx % 14) + 1).padStart(2, '0');
                            const inCart = cart.find((c) => c.id === prod.id);
                            return (
                              <div
                                key={prod.id || idx}
                                className="col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-3"
                                onClick={() => addToCart(prod)}
                                style={{ cursor: "pointer" }}
                              >
                                <div className={`product-info default-cover card h-100 mb-0 ${inCart ? "border-primary shadow-sm" : ""}`}>
                                  <div className="img-bg position-relative text-center p-2">
                                    <ImageWithBasePath
                                      src={`assets/img/products/pos-product-${imgNum}.png`}
                                      alt={prod.name}
                                    />
                                    {inCart && (
                                      <span className="badge bg-success position-absolute top-0 end-0 m-2 fs-12">
                                        ✓ {inCart.qty} in cart
                                      </span>
                                    )}
                                  </div>
                                  <h6 className="cat-name text-muted fs-12 px-2 mt-1">
                                    {prod.sku || "GENERAL"}
                                  </h6>
                                  <h6 className="product-name px-2 fw-bold" style={{ minHeight: "40px" }}>
                                    <span title={prod.name}>{prod.name}</span>
                                  </h6>
                                  <div className="d-flex align-items-center justify-content-between price px-2 pb-2 mt-auto">
                                    <span className="text-muted fs-12">Stock: {prod.stock || 0}</span>
                                    <p className="fw-bold text-primary fs-16 mb-0">${parseFloat(prod.price).toFixed(2)}</p>
                                  </div>
                                </div>
                              </div>
                            );
                          })
                        )}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div className="col-md-12 col-lg-4 ps-0">
              <aside className="product-order-list">
                <div className="head d-flex align-items-center justify-content-between w-100">
                  <div className="">
                    <h5>Order List</h5>
                    <span>Transaction ID : #65565</span>
                  </div>
                  <div className="">
                    <Link className="confirm-text" to="#">
                      <Trash2 className="feather-16 text-danger me-1" />
                    </Link>
                    <Link to="#" className="text-default">
                      <MoreVertical className="feather-16" />
                    </Link>
                  </div>
                </div>
                <div className="customer-info block-section">
                  <h6>Customer Information</h6>
                  <div className="input-block d-flex align-items-center">
                    <div className="flex-grow-1">
                      <Select
                        options={customers}
                        className="select"
                        placeholder="Select an option"
                      />
                    </div>
                    <Link
                      to="#"
                      className="btn btn-primary btn-icon"
                      data-bs-toggle="modal"
                      data-bs-target="#create"
                    >
                      <UserPlus className="feather-16" />
                    </Link>
                  </div>
                  <div className="input-block">
                    <Select
                      options={products}
                      className="select"
                      placeholder="Select an option"
                    />
                  </div>
                </div>
                <div className="product-added block-section">
                  <div className="head-text d-flex align-items-center justify-content-between">
                    <h6 className="d-flex align-items-center mb-0">
                      Product Added<span className="count">{cart.length}</span>
                    </h6>
                    <Link
                      to="#"
                      className="d-flex align-items-center text-danger"
                    >
                      <span className="me-1">
                        <i data-feather="x" className="feather-16" />
                      </span>
                      Clear all
                    </Link>
                  </div>
                  <div className="product-wrap" style={{ maxHeight: "350px", overflowY: "auto" }}>
                    {cart.length === 0 ? (
                      <div className="text-center py-5 text-muted">
                        <i data-feather="shopping-cart" className="feather-32 mb-2 d-block mx-auto" />
                        <p className="mb-0 fw-semibold">Cart is currently empty</p>
                        <small className="text-muted">Tap any product on the left to add items</small>
                      </div>
                    ) : (
                      cart.map((item, idx) => {
                        const imgNum = String((idx % 14) + 1).padStart(2, '0');
                        return (
                          <div key={item.id || idx} className="product-list d-flex align-items-center justify-content-between mb-2 pb-2 border-bottom">
                            <div className="d-flex align-items-center product-info">
                              <div className="img-bg me-2">
                                <ImageWithBasePath
                                  src={`assets/img/products/pos-product-${imgNum}.png`}
                                  alt={item.name}
                                  width={40}
                                  height={40}
                                />
                              </div>
                              <div className="info">
                                <span className="text-muted fs-11">{item.sku || "SKU"}</span>
                                <h6 className="mb-0 fs-13" title={item.name}>{item.name}</h6>
                                <p className="mb-0 text-primary fw-bold fs-13">${parseFloat(item.price).toFixed(2)}</p>
                              </div>
                            </div>
                            <div className="qty-item text-center d-flex align-items-center">
                              <button
                                type="button"
                                className="btn btn-sm btn-light border p-1 me-1"
                                onClick={() => updateQty(item.id, -1)}
                              >
                                <MinusCircle className="feather-14" />
                              </button>
                              <span className="fw-bold px-2 fs-14">{item.qty}</span>
                              <button
                                type="button"
                                className="btn btn-sm btn-light border p-1 ms-1"
                                onClick={() => updateQty(item.id, 1)}
                              >
                                <PlusCircle className="feather-14" />
                              </button>
                            </div>
                            <div className="d-flex align-items-center action ms-2">
                              <span className="fw-bold me-2 fs-13">
                                ${(parseFloat(item.price) * item.qty).toFixed(2)}
                              </span>
                              <button
                                type="button"
                                className="btn btn-sm btn-outline-danger border-0 p-1"
                                onClick={() => removeFromCart(item.id)}
                              >
                                <Trash2 className="feather-14" />
                              </button>
                            </div>
                          </div>
                        );
                      })
                    )}
                  </div>

                  <div className="order-total mt-3">
                    <table className="table table-responsive table-borderless mb-2">
                      <tbody>
                        <tr>
                          <td className="text-muted">Sub Total</td>
                          <td className="text-end fw-semibold">${subtotal.toFixed(2)}</td>
                        </tr>
                        <tr>
                          <td className="text-muted">Tax (GST 5%)</td>
                          <td className="text-end text-muted">${taxAmount.toFixed(2)}</td>
                        </tr>
                        <tr className="border-top">
                          <td className="fw-bold fs-16">Grand Total</td>
                          <td className="text-end fw-bold text-success fs-18">${grandTotal.toFixed(2)}</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>

                <div className="block-section payment-method pt-2">
                  <h6 className="mb-2">Select Payment Method</h6>
                  <div className="row d-flex align-items-center justify-content-center methods g-2">
                    <div className="col-4 item" onClick={() => setActivePaymentMethod("Cash")} style={{ cursor: "pointer" }}>
                      <div className={`default-cover p-2 text-center rounded border ${activePaymentMethod === "Cash" ? "border-success bg-light text-success fw-bold shadow-sm" : "bg-white"}`}>
                        <ImageWithBasePath src="assets/img/icons/cash-pay.svg" alt="Cash" width={24} height={24} />
                        <span className="d-block mt-1 fs-12">Cash</span>
                      </div>
                    </div>
                    <div className="col-4 item" onClick={() => setActivePaymentMethod("Card")} style={{ cursor: "pointer" }}>
                      <div className={`default-cover p-2 text-center rounded border ${activePaymentMethod === "Card" ? "border-success bg-light text-success fw-bold shadow-sm" : "bg-white"}`}>
                        <ImageWithBasePath src="assets/img/icons/credit-card.svg" alt="Card" width={24} height={24} />
                        <span className="d-block mt-1 fs-12">Card</span>
                      </div>
                    </div>
                    <div className="col-4 item" onClick={() => setActivePaymentMethod("Scan / QR")} style={{ cursor: "pointer" }}>
                      <div className={`default-cover p-2 text-center rounded border ${activePaymentMethod === "Scan / QR" ? "border-success bg-light text-success fw-bold shadow-sm" : "bg-white"}`}>
                        <ImageWithBasePath src="assets/img/icons/qr-scan.svg" alt="Scan" width={24} height={24} />
                        <span className="d-block mt-1 fs-12">Scan / QR</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div className="d-grid btn-block mt-3">
                  <div className="btn btn-secondary fs-16 fw-bold py-2">
                    Pay Amount: ${grandTotal.toFixed(2)}
                  </div>
                </div>

                <div className="btn-row d-flex align-items-center justify-content-between mt-2 gap-2">
                  <button
                    type="button"
                    className="btn btn-outline-danger flex-fill py-2"
                    onClick={clearCart}
                    disabled={cart.length === 0}
                  >
                    <Trash2 className="feather-16 me-1" />
                    Clear
                  </button>
                  <button
                    type="button"
                    className="btn btn-success flex-fill py-2 fw-bold"
                    onClick={() => handleCompleteSale(activePaymentMethod)}
                    disabled={cart.length === 0 || isSubmitting}
                  >
                    {isSubmitting ? (
                      <span><span className="spinner-border spinner-border-sm me-1" />Saving...</span>
                    ) : (
                      <span><i data-feather="check-circle" className="feather-16 me-1" />Complete Sale</span>
                    )}
                  </button>
                </div>
              </aside>
            </div>
          </div>
        </div>
      </div>

      {/* Payment Completed */}
      <div
        className="modal fade modal-default"
        id="payment-completed"
        aria-labelledby="payment-completed"
      >
        <div className="modal-dialog modal-dialog-centered">
          <div className="modal-content">
            <div className="modal-body text-center">
              <form>
                <div className="icon-head">
                  <Link to="#">
                    <CheckCircle className="feather-40" />
                  </Link>
                </div>
                <h4>Payment Completed</h4>
                <p className="mb-0">
                  Do you want to Print Receipt for the Completed Order
                </p>
                <div className="modal-footer d-sm-flex justify-content-between">
                  <button
                    type="button"
                    className="btn btn-primary flex-fill me-1"
                    data-bs-toggle="modal"
                    data-bs-target="#print-receipt"
                  >
                    Print Receipt
                  </button>
                  <Link to="#" className="btn btn-secondary flex-fill">
                    Next Order
                  </Link>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      {/* /Payment Completed */}
      {/* Print Receipt */}
      <div
        className="modal fade modal-default"
        id="print-receipt"
        aria-labelledby="print-receipt"
      >
        <div className="modal-dialog modal-dialog-centered">
          <div className="modal-content">
            <div className="d-flex justify-content-end">
              <button
                type="button"
                className="close p-0"
                data-bs-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div className="modal-body">
              <div className="icon-head text-center">
                <Link to="#">
                  <ImageWithBasePath
                    src="assets/img/logo.png"
                    width={100}
                    height={30}
                    alt="Receipt Logo"
                  />
                </Link>
              </div>
              <div className="text-center info text-center">
                <h6>Dreamguys Technologies Pvt Ltd.,</h6>
                <p className="mb-0">Phone Number: +1 5656665656</p>
                <p className="mb-0">
                  Email: <Link to="mailto:example@gmail.com">example@gmail.com</Link>
                </p>
              </div>
              <div className="tax-invoice">
                <h6 className="text-center">Tax Invoice</h6>
                <div className="row">
                  <div className="col-sm-12 col-md-6">
                    <div className="invoice-user-name">
                      <span>Name: </span>
                      <span>John Doe</span>
                    </div>
                    <div className="invoice-user-name">
                      <span>Invoice No: </span>
                      <span>CS132453</span>
                    </div>
                  </div>
                  <div className="col-sm-12 col-md-6">
                    <div className="invoice-user-name">
                      <span>Customer Id: </span>
                      <span>#LL93784</span>
                    </div>
                    <div className="invoice-user-name">
                      <span>Date: </span>
                      <span>01.07.2022</span>
                    </div>
                  </div>
                </div>
              </div>
              <table className="table-borderless w-100 table-fit">
                <thead>
                  <tr>
                    <th># Item</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th className="text-end">Total</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1. Red Nike Laser</td>
                    <td>$50</td>
                    <td>3</td>
                    <td className="text-end">$150</td>
                  </tr>
                  <tr>
                    <td>2. Iphone 14</td>
                    <td>$50</td>
                    <td>2</td>
                    <td className="text-end">$100</td>
                  </tr>
                  <tr>
                    <td>3. Apple Series 8</td>
                    <td>$50</td>
                    <td>3</td>
                    <td className="text-end">$150</td>
                  </tr>
                  <tr>
                    <td colSpan={4}>
                      <table className="table-borderless w-100 table-fit">
                        <tbody>
                          <tr>
                            <td>Sub Total :</td>
                            <td className="text-end">$700.00</td>
                          </tr>
                          <tr>
                            <td>Discount :</td>
                            <td className="text-end">-$50.00</td>
                          </tr>
                          <tr>
                            <td>Shipping :</td>
                            <td className="text-end">0.00</td>
                          </tr>
                          <tr>
                            <td>Tax (5%) :</td>
                            <td className="text-end">$5.00</td>
                          </tr>
                          <tr>
                            <td>Total Bill :</td>
                            <td className="text-end">$655.00</td>
                          </tr>
                          <tr>
                            <td>Due :</td>
                            <td className="text-end">$0.00</td>
                          </tr>
                          <tr>
                            <td>Total Payable :</td>
                            <td className="text-end">$655.00</td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div className="text-center invoice-bar">
                <p>
                  **VAT against this challan is payable through central
                  registration. Thank you for your business!
                </p>
                <Link to="#">
                  <ImageWithBasePath src="assets/img/barcode/barcode-03.jpg" alt="Barcode" />
                </Link>
                <p>Sale 31</p>
                <p>Thank You For Shopping With Us. Please Come Again</p>
                <Link to="#" className="btn btn-primary">
                  Print Receipt
                </Link>
              </div>
            </div>
          </div>
        </div>
      </div>
      {/* /Print Receipt */}
      {/* Products */}
      <div
        className="modal fade modal-default pos-modal"
        id="products"
        aria-labelledby="products"
      >
        <div className="modal-dialog modal-dialog-centered">
          <div className="modal-content">
            <div className="modal-header p-4 d-flex align-items-center justify-content-between">
              <div className="d-flex align-items-center">
                <h5 className="me-4">Products</h5>
                <span className="badge bg-info d-inline-block mb-0">
                  Order ID : #666614
                </span>
              </div>
              <button
                type="button"
                className="close"
                data-bs-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div className="modal-body p-4">
              <form>
                <div className="product-wrap">
                  <div className="product-list d-flex align-items-center justify-content-between">
                    <div className="d-flex align-items-center flex-fill">
                      <Link to="#" className="img-bg me-2">
                        <ImageWithBasePath
                          src="assets/img/products/pos-product-16.png"
                          alt="Products"
                        />
                      </Link>
                      <div className="info d-flex align-items-center justify-content-between flex-fill">
                        <div>
                          <span>PT0005</span>
                          <h6>
                            <Link to="#">Red Nike Laser</Link>
                          </h6>
                        </div>
                        <p>$2000</p>
                      </div>
                    </div>
                  </div>
                  <div className="product-list d-flex align-items-center justify-content-between">
                    <div className="d-flex align-items-center flex-fill">
                      <Link to="#" className="img-bg me-2">
                        <ImageWithBasePath
                          src="assets/img/products/pos-product-17.png"
                          alt="Products"
                        />
                      </Link>
                      <div className="info d-flex align-items-center justify-content-between flex-fill">
                        <div>
                          <span>PT0235</span>
                          <h6>
                            <Link to="#">Iphone 14</Link>
                          </h6>
                        </div>
                        <p>$3000</p>
                      </div>
                    </div>
                  </div>
                  <div className="product-list d-flex align-items-center justify-content-between">
                    <div className="d-flex align-items-center flex-fill">
                      <Link to="#" className="img-bg me-2">
                        <ImageWithBasePath
                          src="assets/img/products/pos-product-16.png"
                          alt="Products"
                        />
                      </Link>
                      <div className="info d-flex align-items-center justify-content-between flex-fill">
                        <div>
                          <span>PT0005</span>
                          <h6>
                            <Link to="#">Red Nike Laser</Link>
                          </h6>
                        </div>
                        <p>$2000</p>
                      </div>
                    </div>
                  </div>
                  <div className="product-list d-flex align-items-center justify-content-between">
                    <div className="d-flex align-items-center flex-fill">
                      <Link to="#" className="img-bg me-2">
                        <ImageWithBasePath
                          src="assets/img/products/pos-product-17.png"
                          alt="Products"
                        />
                      </Link>
                      <div className="info d-flex align-items-center justify-content-between flex-fill">
                        <div>
                          <span>PT0005</span>
                          <h6>
                            <Link to="#">Red Nike Laser</Link>
                          </h6>
                        </div>
                        <p>$2000</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div className="modal-footer d-sm-flex justify-content-end">
                  <button
                    type="button"
                    className="btn btn-secondary"
                    data-bs-dismiss="modal"
                  >
                    Cancel
                  </button>
                  <Link to="#" className="btn btn-primary">
                    Submit
                  </Link>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      {/* /Products */}
      <div
        className="modal fade"
        id="create"
        tabIndex={-1}
        aria-labelledby="create"
        aria-hidden="true"
      >
        <div
          className="modal-dialog modal-lg modal-dialog-centered"
          role="document"
        >
          <div className="modal-content">
            <div className="modal-header">
              <h5 className="modal-title">Create</h5>
              <button
                type="button"
                className="close"
                data-bs-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div className="modal-body">
              <form>
                <div className="row">
                  <div className="col-lg-6 col-sm-12 col-12">
                    <div className="input-blocks">
                      <label>Customer Name</label>
                      <input type="text" className="form-control" />
                    </div>
                  </div>
                  <div className="col-lg-6 col-sm-12 col-12">
                    <div className="input-blocks">
                      <label>Email</label>
                      <input type="email" className="form-control" />
                    </div>
                  </div>
                  <div className="col-lg-6 col-sm-12 col-12">
                    <div className="input-blocks">
                      <label>Phone</label>
                      <input type="text" className="form-control" />
                    </div>
                  </div>
                  <div className="col-lg-6 col-sm-12 col-12">
                    <div className="input-blocks">
                      <label>Country</label>
                      <input type="text" className="form-control" />
                    </div>
                  </div>
                  <div className="col-lg-6 col-sm-12 col-12">
                    <div className="input-blocks">
                      <label>City</label>
                      <input type="text" />
                    </div>
                  </div>
                  <div className="col-lg-6 col-sm-12 col-12">
                    <div className="input-blocks">
                      <label>Address</label>
                      <input type="text" />
                    </div>
                  </div>
                </div>
                <div className="modal-footer d-sm-flex justify-content-end">
                  <button
                    type="button"
                    className="btn btn-cancel"
                    data-bs-dismiss="modal"
                  >
                    Cancel
                  </button>
                  <Link to="#" className="btn btn-submit me-2">
                    Submit
                  </Link>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      {/* Hold */}
      <div
        className="modal fade modal-default pos-modal"
        id="hold-order"
        aria-labelledby="hold-order"
      >
        <div className="modal-dialog modal-dialog-centered">
          <div className="modal-content">
            <div className="modal-header p-4">
              <h5>Hold order</h5>
              <button
                type="button"
                className="close"
                data-bs-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div className="modal-body p-4">
              <form>
                <h2 className="text-center p-4">4500.00</h2>
                <div className="input-block">
                  <label>Order Reference</label>
                  <input
                    className="form-control"
                    type="text"
                    defaultValue=""
                    placeholder=""
                  />
                </div>
                <p>
                  The current order will be set on hold. You can retreive this order
                  from the pending order button. Providing a reference to it might
                  help you to identify the order more quickly.
                </p>
                <div className="modal-footer d-sm-flex justify-content-end">
                  <button
                    type="button"
                    className="btn btn-secondary"
                    data-bs-dismiss="modal"
                  >
                    Cancel
                  </button>
                  <Link to="#" className="btn btn-primary">
                    Confirm
                  </Link>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      {/* /Hold */}
      {/* Edit Product */}
      <div
        className="modal fade modal-default pos-modal"
        id="edit-product"
        aria-labelledby="edit-product"
      >
        <div className="modal-dialog modal-dialog-centered">
          <div className="modal-content">
            <div className="modal-header p-4">
              <h5>Red Nike Laser</h5>
              <button
                type="button"
                className="close"
                data-bs-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div className="modal-body p-4">
              <form>
                <div className="row">
                  <div className="col-lg-6 col-sm-12 col-12">
                    <div className="input-blocks add-product">
                      <label>
                        Product Name <span>*</span>
                      </label>
                      <input type="text" placeholder={45} />
                    </div>
                  </div>
                  <div className="col-lg-6 col-sm-12 col-12">
                    <div className="input-blocks add-product">
                      <label>
                        Tax Type <span>*</span>
                      </label>
                      <Select
                        className="select"
                        options={tax}
                        placeholder="Select Option"
                      />
                    </div>
                  </div>
                  <div className="col-lg-6 col-sm-12 col-12">
                    <div className="input-blocks add-product">
                      <label>
                        Tax <span>*</span>
                      </label>
                      <input type="text" placeholder="% 15" />
                    </div>
                  </div>
                  <div className="col-lg-6 col-sm-12 col-12">
                    <div className="input-blocks add-product">
                      <label>
                        Discount Type <span>*</span>
                      </label>
                      <Select
                        className="select"
                        options={discounttype}
                        placeholder="Select Option"
                      />
                    </div>
                  </div>
                  <div className="col-lg-6 col-sm-12 col-12">
                    <div className="input-blocks add-product">
                      <label>
                        Discount <span>*</span>
                      </label>
                      <input type="text" placeholder={15} />
                    </div>
                  </div>
                  <div className="col-lg-6 col-sm-12 col-12">
                    <div className="input-blocks add-product">
                      <label>
                        Sale Unit <span>*</span>
                      </label>
                      <Select
                        className="select"
                        options={units}
                        placeholder="Select Option"
                      />
                    </div>
                  </div>
                </div>
                <div className="modal-footer d-sm-flex justify-content-end">
                  <button
                    type="button"
                    className="btn btn-secondary"
                    data-bs-dismiss="modal"
                  >
                    Cancel
                  </button>
                  <Link to="#" className="btn btn-primary">
                    Submit
                  </Link>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      {/* /Edit Product */}
      {/* Recent Transactions */}
      <div
        className="modal fade pos-modal"
        id="recents"
        tabIndex={-1}
        aria-hidden="true"
      >
        <div
          className="modal-dialog modal-lg modal-dialog-centered"
          role="document"
        >
          <div className="modal-content">
            <div className="modal-header p-4">
              <h5 className="modal-title">Recent Transactions</h5>
              <button
                type="button"
                className="close"
                data-bs-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div className="modal-body p-4">
              <div className="tabs-sets">
                <ul className="nav nav-tabs" id="myTab" role="tablist">
                  <li className="nav-item" role="presentation">
                    <button
                      className="nav-link active"
                      id="purchase-tab"
                      data-bs-toggle="tab"
                      data-bs-target="#purchase"
                      type="button"
                      aria-controls="purchase"
                      aria-selected="true"
                      role="tab"
                    >
                      Purchase
                    </button>
                  </li>
                  <li className="nav-item" role="presentation">
                    <button
                      className="nav-link"
                      id="payment-tab"
                      data-bs-toggle="tab"
                      data-bs-target="#payment"
                      type="button"
                      aria-controls="payment"
                      aria-selected="false"
                      role="tab"
                    >
                      Payment
                    </button>
                  </li>
                  <li className="nav-item" role="presentation">
                    <button
                      className="nav-link"
                      id="return-tab"
                      data-bs-toggle="tab"
                      data-bs-target="#return"
                      type="button"
                      aria-controls="return"
                      aria-selected="false"
                      role="tab"
                    >
                      Return
                    </button>
                  </li>
                </ul>
                <div className="tab-content">
                  <div
                    className="tab-pane fade show active"
                    id="purchase"
                    role="tabpanel"
                    aria-labelledby="purchase-tab"
                  >
                    <div className="table-top">
                      <div className="search-set">
                        <div className="search-input">
                          <input
                            type="text"
                            placeholder="Search"
                            className="form-control form-control-sm formsearch"
                          />
                          <Link to className="btn btn-searchset">
                            <i data-feather="search" className="feather-search" />
                          </Link>
                        </div>
                      </div>
                      <div className="wordset">
                        <ul>
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
                        </ul>
                      </div>
                    </div>
                    <div className="table-responsive">
                      <table className="table datanew">
                        <thead>
                          <tr>
                            <th>Date</th>
                            <th>Reference</th>
                            <th>Customer</th>
                            <th>Amount </th>
                            <th className="no-sort">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>19 Jan 2023</td>
                            <td>INV/SL0101</td>
                            <td>Walk-in Customer</td>
                            <td>$1500.00</td>
                            <td className="action-table-data">
                              <div className="edit-delete-action">
                                <Link className="me-2 p-2" to="#">
                                  <i data-feather="eye" className="feather-eye" />
                                </Link>
                                <Link className="me-2 p-2" to="#">
                                  <i data-feather="edit" className="feather-edit" />
                                </Link>
                                <Link onClick={showConfirmationAlert}
                                  className="p-2 confirm-text"
                                  to="#"
                                >
                                  <i
                                    data-feather="trash-2"
                                    className="feather-trash-2"
                                  />
                                </Link>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>19 Jan 2023</td>
                            <td>INV/SL0102</td>
                            <td>Walk-in Customer</td>
                            <td>$1500.00</td>
                            <td className="action-table-data">
                              <div className="edit-delete-action">
                                <Link className="me-2 p-2" to="#">
                                  <i data-feather="eye" className="feather-eye" />
                                </Link>
                                <Link className="me-2 p-2" to="#">
                                  <i data-feather="edit" className="feather-edit" />
                                </Link>
                                <Link onClick={showConfirmationAlert}
                                  className="p-2 confirm-text"
                                  to="#"
                                >
                                  <i
                                    data-feather="trash-2"
                                    className="feather-trash-2"
                                  />
                                </Link>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>19 Jan 2023</td>
                            <td>INV/SL0103</td>
                            <td>Walk-in Customer</td>
                            <td>$1500.00</td>
                            <td className="action-table-data">
                              <div className="edit-delete-action">
                                <Link className="me-2 p-2" to="#">
                                  <i data-feather="eye" className="feather-eye" />
                                </Link>
                                <Link className="me-2 p-2" to="#">
                                  <i data-feather="edit" className="feather-edit" />
                                </Link>
                                <Link onClick={showConfirmationAlert}
                                  className="p-2 confirm-text"
                                  to="#"
                                >
                                  <i
                                    data-feather="trash-2"
                                    className="feather-trash-2"
                                  />
                                </Link>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>19 Jan 2023</td>
                            <td>INV/SL0104</td>
                            <td>Walk-in Customer</td>
                            <td>$1500.00</td>
                            <td className="action-table-data">
                              <div className="edit-delete-action">
                                <Link className="me-2 p-2" to="#">
                                  <i data-feather="eye" className="feather-eye" />
                                </Link>
                                <Link className="me-2 p-2" to="#">
                                  <i data-feather="edit" className="feather-edit" />
                                </Link>
                                <Link onClick={showConfirmationAlert}
                                  className="p-2 confirm-text"
                                  to="#"
                                >
                                  <i
                                    data-feather="trash-2"
                                    className="feather-trash-2"
                                  />
                                </Link>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>19 Jan 2023</td>
                            <td>INV/SL0105</td>
                            <td>Walk-in Customer</td>
                            <td>$1500.00</td>
                            <td className="action-table-data">
                              <div className="edit-delete-action">
                                <Link className="me-2 p-2" to="#">
                                  <i data-feather="eye" className="feather-eye" />
                                </Link>
                                <Link className="me-2 p-2" to="#">
                                  <i data-feather="edit" className="feather-edit" />
                                </Link>
                                <Link onClick={showConfirmationAlert}
                                  className="p-2 confirm-text"
                                  to="#"
                                >
                                  <i
                                    data-feather="trash-2"
                                    className="feather-trash-2"
                                  />
                                </Link>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>19 Jan 2023</td>
                            <td>INV/SL0106</td>
                            <td>Walk-in Customer</td>
                            <td>$1500.00</td>
                            <td className="action-table-data">
                              <div className="edit-delete-action">
                                <Link className="me-2 p-2" to="#">
                                  <i data-feather="eye" className="feather-eye" />
                                </Link>
                                <Link className="me-2 p-2" to="#">
                                  <i data-feather="edit" className="feather-edit" />
                                </Link>
                                <Link onClick={showConfirmationAlert}
                                  className="p-2 confirm-text"
                                  to="#"
                                >
                                  <i
                                    data-feather="trash-2"
                                    className="feather-trash-2"
                                  />
                                </Link>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>19 Jan 2023</td>
                            <td>INV/SL0107</td>
                            <td>Walk-in Customer</td>
                            <td>$1500.00</td>
                            <td className="action-table-data">
                              <div className="edit-delete-action">
                                <Link className="me-2 p-2" to="#">
                                  <i data-feather="eye" className="feather-eye" />
                                </Link>
                                <Link className="me-2 p-2" to="#">
                                  <i data-feather="edit" className="feather-edit" />
                                </Link>
                                <Link onClick={showConfirmationAlert}
                                  className="p-2 confirm-text"
                                  to="#"
                                >
                                  <i
                                    data-feather="trash-2"
                                    className="feather-trash-2"
                                  />
                                </Link>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div className="tab-pane fade" id="payment" role="tabpanel">
                    <div className="table-top">
                      <div className="search-set">
                        <div className="search-input">
                          <input
                            type="text"
                            placeholder="Search"
                            className="form-control form-control-sm formsearch"
                          />
                          <Link to className="btn btn-searchset">
                            <i data-feather="search" className="feather-search" />
                          </Link>
                        </div>
                      </div>
                      <div className="wordset">
                        <ul>
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
                        </ul>
                      </div>
                    </div>
                    <div className="table-responsive">
                      <table className="table datanew">
                        <thead>
                          <tr>
                            <th>Date</th>
                            <th>Reference</th>
                            <th>Customer</th>
                            <th>Amount </th>
                            <th className="no-sort">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>19 Jan 2023</td>
                            <td>INV/SL0101</td>
                            <td>Walk-in Customer</td>
                            <td>$1500.00</td>
                            <td className="action-table-data">
                              <div className="edit-delete-action">
                                <Link className="me-2 p-2" to="#">
                                  <i data-feather="eye" className="feather-eye" />
                                </Link>
                                <Link className="me-2 p-2" to="#">
                                  <i data-feather="edit" className="feather-edit" />
                                </Link>
                                <Link onClick={showConfirmationAlert}
                                  className="p-2 confirm-text"
                                  to="#"
                                >
                                  <i
                                    data-feather="trash-2"
                                    className="feather-trash-2"
                                  />
                                </Link>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>19 Jan 2023</td>
                            <td>INV/SL0102</td>
                            <td>Walk-in Customer</td>
                            <td>$1500.00</td>
                            <td className="action-table-data">
                              <div className="edit-delete-action">
                                <Link className="me-2 p-2" to="#">
                                  <i data-feather="eye" className="feather-eye" />
                                </Link>
                                <Link className="me-2 p-2" to="#">
                                  <i data-feather="edit" className="feather-edit" />
                                </Link>
                                <Link onClick={showConfirmationAlert}
                                  className="p-2 confirm-text"
                                  to="#"
                                >
                                  <i
                                    data-feather="trash-2"
                                    className="feather-trash-2"
                                  />
                                </Link>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>19 Jan 2023</td>
                            <td>INV/SL0103</td>
                            <td>Walk-in Customer</td>
                            <td>$1500.00</td>
                            <td className="action-table-data">
                              <div className="edit-delete-action">
                                <Link className="me-2 p-2" to="#">
                                  <i data-feather="eye" className="feather-eye" />
                                </Link>
                                <Link className="me-2 p-2" to="#">
                                  <i data-feather="edit" className="feather-edit" />
                                </Link>
                                <Link onClick={showConfirmationAlert}
                                  className="p-2 confirm-text"
                                  to="#"
                                >
                                  <i
                                    data-feather="trash-2"
                                    className="feather-trash-2"
                                  />
                                </Link>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>19 Jan 2023</td>
                            <td>INV/SL0104</td>
                            <td>Walk-in Customer</td>
                            <td>$1500.00</td>
                            <td className="action-table-data">
                              <div className="edit-delete-action">
                                <Link className="me-2 p-2" to="#">
                                  <i data-feather="eye" className="feather-eye" />
                                </Link>
                                <Link className="me-2 p-2" to="#">
                                  <i data-feather="edit" className="feather-edit" />
                                </Link>
                                <Link onClick={showConfirmationAlert}
                                  className="p-2 confirm-text"
                                  to="#"
                                >
                                  <i
                                    data-feather="trash-2"
                                    className="feather-trash-2"
                                  />
                                </Link>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>19 Jan 2023</td>
                            <td>INV/SL0105</td>
                            <td>Walk-in Customer</td>
                            <td>$1500.00</td>
                            <td className="action-table-data">
                              <div className="edit-delete-action">
                                <Link className="me-2 p-2" to="#">
                                  <i data-feather="eye" className="feather-eye" />
                                </Link>
                                <Link className="me-2 p-2" to="#">
                                  <i data-feather="edit" className="feather-edit" />
                                </Link>
                                <Link onClick={showConfirmationAlert}
                                  className="p-2 confirm-text"
                                  to="#"
                                >
                                  <i
                                    data-feather="trash-2"
                                    className="feather-trash-2"
                                  />
                                </Link>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>19 Jan 2023</td>
                            <td>INV/SL0106</td>
                            <td>Walk-in Customer</td>
                            <td>$1500.00</td>
                            <td className="action-table-data">
                              <div className="edit-delete-action">
                                <Link className="me-2 p-2" to="#">
                                  <i data-feather="eye" className="feather-eye" />
                                </Link>
                                <Link className="me-2 p-2" to="#">
                                  <i data-feather="edit" className="feather-edit" />
                                </Link>
                                <Link onClick={showConfirmationAlert}
                                  className="p-2 confirm-text"
                                  to="#"
                                >
                                  <i
                                    data-feather="trash-2"
                                    className="feather-trash-2"
                                  />
                                </Link>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>19 Jan 2023</td>
                            <td>INV/SL0107</td>
                            <td>Walk-in Customer</td>
                            <td>$1500.00</td>
                            <td className="action-table-data">
                              <div className="edit-delete-action">
                                <Link className="me-2 p-2" to="#">
                                  <i data-feather="eye" className="feather-eye" />
                                </Link>
                                <Link className="me-2 p-2" to="#">
                                  <i data-feather="edit" className="feather-edit" />
                                </Link>
                                <Link onClick={showConfirmationAlert}
                                  className="p-2 confirm-text"
                                  to="#"
                                >
                                  <i
                                    data-feather="trash-2"
                                    className="feather-trash-2"
                                  />
                                </Link>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div className="tab-pane fade" id="return" role="tabpanel">
                    <div className="table-top">
                      <div className="search-set">
                        <div className="search-input">
                          <input
                            type="text"
                            placeholder="Search"
                            className="form-control form-control-sm formsearch"
                          />
                          <Link to className="btn btn-searchset">
                            <i data-feather="search" className="feather-search" />
                          </Link>
                        </div>
                      </div>
                      <div className="wordset">
                        <ul>
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
                        </ul>
                      </div>
                    </div>
                    <div className="table-responsive">
                      <table className="table datanew">
                        <thead>
                          <tr>
                            <th>Date</th>
                            <th>Reference</th>
                            <th>Customer</th>
                            <th>Amount </th>
                            <th className="no-sort">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>19 Jan 2023</td>
                            <td>INV/SL0101</td>
                            <td>Walk-in Customer</td>
                            <td>$1500.00</td>
                            <td className="action-table-data">
                              <div className="edit-delete-action">
                                <Link className="me-2 p-2" to="#">
                                  <i data-feather="eye" className="feather-eye" />
                                </Link>
                                <Link className="me-2 p-2" to="#">
                                  <i data-feather="edit" className="feather-edit" />
                                </Link>
                                <Link onClick={showConfirmationAlert}
                                  className="p-2 confirm-text"
                                  to="#"
                                >
                                  <i
                                    data-feather="trash-2"
                                    className="feather-trash-2"
                                  />
                                </Link>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>19 Jan 2023</td>
                            <td>INV/SL0102</td>
                            <td>Walk-in Customer</td>
                            <td>$1500.00</td>
                            <td className="action-table-data">
                              <div className="edit-delete-action">
                                <Link className="me-2 p-2" to="#">
                                  <i data-feather="eye" className="feather-eye" />
                                </Link>
                                <Link className="me-2 p-2" to="#">
                                  <i data-feather="edit" className="feather-edit" />
                                </Link>
                                <Link onClick={showConfirmationAlert}
                                  className="p-2 confirm-text"
                                  to="#"
                                >
                                  <i
                                    data-feather="trash-2"
                                    className="feather-trash-2"
                                  />
                                </Link>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>19 Jan 2023</td>
                            <td>INV/SL0103</td>
                            <td>Walk-in Customer</td>
                            <td>$1500.00</td>
                            <td className="action-table-data">
                              <div className="edit-delete-action">
                                <Link className="me-2 p-2" to="#">
                                  <i data-feather="eye" className="feather-eye" />
                                </Link>
                                <Link className="me-2 p-2" to="#">
                                  <i data-feather="edit" className="feather-edit" />
                                </Link>
                                <Link onClick={showConfirmationAlert}
                                  className="p-2 confirm-text"
                                  to="#"
                                >
                                  <i
                                    data-feather="trash-2"
                                    className="feather-trash-2"
                                  />
                                </Link>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>19 Jan 2023</td>
                            <td>INV/SL0104</td>
                            <td>Walk-in Customer</td>
                            <td>$1500.00</td>
                            <td className="action-table-data">
                              <div className="edit-delete-action">
                                <Link className="me-2 p-2" to="#">
                                  <i data-feather="eye" className="feather-eye" />
                                </Link>
                                <Link className="me-2 p-2" to="#">
                                  <i data-feather="edit" className="feather-edit" />
                                </Link>
                                <Link onClick={showConfirmationAlert}
                                  className="p-2 confirm-text"
                                  to="#"
                                >
                                  <i
                                    data-feather="trash-2"
                                    className="feather-trash-2"
                                  />
                                </Link>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>19 Jan 2023</td>
                            <td>INV/SL0105</td>
                            <td>Walk-in Customer</td>
                            <td>$1500.00</td>
                            <td className="action-table-data">
                              <div className="edit-delete-action">
                                <Link className="me-2 p-2" to="#">
                                  <i data-feather="eye" className="feather-eye" />
                                </Link>
                                <Link className="me-2 p-2" to="#">
                                  <i data-feather="edit" className="feather-edit" />
                                </Link>
                                <Link onClick={showConfirmationAlert}
                                  className="p-2 confirm-text"
                                  to="#"
                                >
                                  <i
                                    data-feather="trash-2"
                                    className="feather-trash-2"
                                  />
                                </Link>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>19 Jan 2023</td>
                            <td>INV/SL0106</td>
                            <td>Walk-in Customer</td>
                            <td>$1500.00</td>
                            <td className="action-table-data">
                              <div className="edit-delete-action">
                                <Link className="me-2 p-2" to="#">
                                  <i data-feather="eye" className="feather-eye" />
                                </Link>
                                <Link className="me-2 p-2" to="#">
                                  <i data-feather="edit" className="feather-edit" />
                                </Link>
                                <Link onClick={showConfirmationAlert}
                                  className="p-2 confirm-text"
                                  to="#"
                                >
                                  <i
                                    data-feather="trash-2"
                                    className="feather-trash-2"
                                  />
                                </Link>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>19 Jan 2023</td>
                            <td>INV/SL0107</td>
                            <td>Walk-in Customer</td>
                            <td>$1500.00</td>
                            <td className="action-table-data">
                              <div className="edit-delete-action">
                                <Link className="me-2 p-2" to="#">
                                  <i data-feather="eye" className="feather-eye" />
                                </Link>
                                <Link className="me-2 p-2" to="#">
                                  <i data-feather="edit" className="feather-edit" />
                                </Link>
                                <Link onClick={showConfirmationAlert}
                                  className="p-2 confirm-text"
                                  to="#"
                                >
                                  <i
                                    data-feather="trash-2"
                                    className="feather-trash-2"
                                  />
                                </Link>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      {/* /Recent Transactions */}


      {/* Recent Transactions */}
      <div
        className="modal fade pos-modal"
        id="orders"
        tabIndex={-1}
        aria-hidden="true"
      >
        <div
          className="modal-dialog modal-md modal-dialog-centered"
          role="document"
        >
          <div className="modal-content">
            <div className="modal-header p-4">
              <h5 className="modal-title">Orders</h5>
              <button
                type="button"
                className="close"
                data-bs-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div className="modal-body p-4">
              <div className="tabs-sets">
                <ul className="nav nav-tabs" id="myTabs" role="tablist">
                  <li className="nav-item" role="presentation">
                    <button
                      className="nav-link active"
                      id="onhold-tab"
                      data-bs-toggle="tab"
                      data-bs-target="#onhold"
                      type="button"
                      aria-controls="onhold"
                      aria-selected="true"
                      role="tab"
                    >
                      Onhold
                    </button>
                  </li>
                  <li className="nav-item" role="presentation">
                    <button
                      className="nav-link"
                      id="unpaid-tab"
                      data-bs-toggle="tab"
                      data-bs-target="#unpaid"
                      type="button"
                      aria-controls="unpaid"
                      aria-selected="false"
                      role="tab"
                    >
                      Unpaid
                    </button>
                  </li>
                  <li className="nav-item" role="presentation">
                    <button
                      className="nav-link"
                      id="paid-tab"
                      data-bs-toggle="tab"
                      data-bs-target="#paid"
                      type="button"
                      aria-controls="paid"
                      aria-selected="false"
                      role="tab"
                    >
                      Paid
                    </button>
                  </li>
                </ul>
                <div className="tab-content">
                  <div
                    className="tab-pane fade show active"
                    id="onhold"
                    role="tabpanel"
                    aria-labelledby="onhold-tab"
                  >
                    <div className="table-top">
                      <div className="search-set w-100 search-order">
                        <div className="search-input w-100">
                          <input
                            type="text"
                            placeholder="Search"
                            className="form-control form-control-sm formsearch w-100"
                          />
                          <Link to className="btn btn-searchset">
                            <i data-feather="search" className="feather-search" />
                          </Link>
                        </div>
                      </div>
                    </div>
                    <div className="order-body">
                      <div className="default-cover p-4 mb-4">
                        <span className="badge bg-secondary d-inline-block mb-4">
                          Order ID : #666659
                        </span>
                        <div className="row">
                          <div className="col-sm-12 col-md-6 record mb-3">
                            <table>
                              <tbody>
                                <tr className="mb-3">
                                  <td>Cashier</td>
                                  <td className="colon">:</td>
                                  <td className="text">admin</td>
                                </tr>
                                <tr>
                                  <td>Customer</td>
                                  <td className="colon">:</td>
                                  <td className="text">Botsford</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div className="col-sm-12 col-md-6 record mb-3">
                            <table>
                              <tbody>
                                <tr>
                                  <td>Total</td>
                                  <td className="colon">:</td>
                                  <td className="text">$900</td>
                                </tr>
                                <tr>
                                  <td>Date</td>
                                  <td className="colon">:</td>
                                  <td className="text">29-08-2023 13:39:11</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <p className="p-4">
                          Customer need to recheck the product once
                        </p>
                        <div className="btn-row d-sm-flex align-items-center justify-content-between">
                          <Link
                            to="#"
                            className="btn btn-info btn-icon flex-fill"
                          >
                            Open
                          </Link>
                          <Link
                            to="#"
                            className="btn btn-danger btn-icon flex-fill"
                          >
                            Products
                          </Link>
                          <Link
                            to="#"
                            className="btn btn-success btn-icon flex-fill"
                          >
                            Print
                          </Link>
                        </div>
                      </div>
                      <div className="default-cover p-4 mb-4">
                        <span className="badge bg-secondary d-inline-block mb-4">
                          Order ID : #666660
                        </span>
                        <div className="row">
                          <div className="col-sm-12 col-md-6 record mb-3">
                            <table>
                              <tbody>
                                <tr className="mb-3">
                                  <td>Cashier</td>
                                  <td className="colon">:</td>
                                  <td className="text">admin</td>
                                </tr>
                                <tr>
                                  <td>Customer</td>
                                  <td className="colon">:</td>
                                  <td className="text">Smith</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div className="col-sm-12 col-md-6 record mb-3">
                            <table>
                              <tbody>
                                <tr>
                                  <td>Total</td>
                                  <td className="colon">:</td>
                                  <td className="text">$15000</td>
                                </tr>
                                <tr>
                                  <td>Date</td>
                                  <td className="colon">:</td>
                                  <td className="text">30-08-2023 15:59:11</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <p className="p-4">
                          Customer need to recheck the product once
                        </p>
                        <div className="btn-row d-flex align-items-center justify-content-between">
                          <Link
                            to="#"
                            className="btn btn-info btn-icon flex-fill"
                          >
                            Open
                          </Link>
                          <Link
                            to="#"
                            className="btn btn-danger btn-icon flex-fill"
                          >
                            Products
                          </Link>
                          <Link
                            to="#"
                            className="btn btn-success btn-icon flex-fill"
                          >
                            Print
                          </Link>
                        </div>
                      </div>
                      <div className="default-cover p-4">
                        <span className="badge bg-secondary d-inline-block mb-4">
                          Order ID : #666661
                        </span>
                        <div className="row">
                          <div className="col-sm-12 col-md-6 record mb-3">
                            <table>
                              <tbody>
                                <tr className="mb-3">
                                  <td>Cashier</td>
                                  <td className="colon">:</td>
                                  <td className="text">admin</td>
                                </tr>
                                <tr>
                                  <td>Customer</td>
                                  <td className="colon">:</td>
                                  <td className="text">John David</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div className="col-sm-12 col-md-6 record mb-3">
                            <table>
                              <tbody>
                                <tr>
                                  <td>Total</td>
                                  <td className="colon">:</td>
                                  <td className="text">$2000</td>
                                </tr>
                                <tr>
                                  <td>Date</td>
                                  <td className="colon">:</td>
                                  <td className="text">01-09-2023 13:15:00</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <p className="p-4 mb-4">
                          Customer need to recheck the product once
                        </p>
                        <div className="btn-row d-flex align-items-center justify-content-between">
                          <Link
                            to="#"
                            className="btn btn-info btn-icon flex-fill"
                          >
                            Open
                          </Link>
                          <Link
                            to="#"
                            className="btn btn-danger btn-icon flex-fill"
                          >
                            Products
                          </Link>
                          <Link
                            to="#"
                            className="btn btn-success btn-icon flex-fill"
                          >
                            Print
                          </Link>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div className="tab-pane fade" id="unpaid" role="tabpanel">
                    <div className="table-top">
                      <div className="search-set w-100 search-order">
                        <div className="search-input w-100">
                          <input
                            type="text"
                            placeholder="Search"
                            className="form-control form-control-sm formsearch w-100"
                          />
                          <Link to className="btn btn-searchset">
                            <i data-feather="search" className="feather-search" />
                          </Link>
                        </div>
                      </div>
                    </div>
                    <div className="order-body">
                      <div className="default-cover p-4 mb-4">
                        <span className="badge bg-info d-inline-block mb-4">
                          Order ID : #666662
                        </span>
                        <div className="row">
                          <div className="col-sm-12 col-md-6 record mb-3">
                            <table>
                              <tbody>
                                <tr className="mb-3">
                                  <td>Cashier</td>
                                  <td className="colon">:</td>
                                  <td className="text">admin</td>
                                </tr>
                                <tr>
                                  <td>Customer</td>
                                  <td className="colon">:</td>
                                  <td className="text">Anastasia</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div className="col-sm-12 col-md-6 record mb-3">
                            <table>
                              <tbody>
                                <tr>
                                  <td>Total</td>
                                  <td className="colon">:</td>
                                  <td className="text">$2500</td>
                                </tr>
                                <tr>
                                  <td>Date</td>
                                  <td className="colon">:</td>
                                  <td className="text">10-09-2023 17:15:11</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <p className="p-4">
                          Customer need to recheck the product once
                        </p>
                        <div className="btn-row d-flex align-items-center justify-content-between">
                          <Link
                            to="#"
                            className="btn btn-info btn-icon flex-fill"
                          >
                            Open
                          </Link>
                          <Link
                            to="#"
                            className="btn btn-danger btn-icon flex-fill"
                          >
                            Products
                          </Link>
                          <Link
                            to="#"
                            className="btn btn-success btn-icon flex-fill"
                          >
                            Print
                          </Link>
                        </div>
                      </div>
                      <div className="default-cover p-4 mb-4">
                        <span className="badge bg-info d-inline-block mb-4">
                          Order ID : #666663
                        </span>
                        <div className="row">
                          <div className="col-sm-12 col-md-6 record mb-3">
                            <table>
                              <tbody>
                                <tr className="mb-3">
                                  <td>Cashier</td>
                                  <td className="colon">:</td>
                                  <td className="text">admin</td>
                                </tr>
                                <tr>
                                  <td>Customer</td>
                                  <td className="colon">:</td>
                                  <td className="text">Lucia</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div className="col-sm-12 col-md-6 record mb-3">
                            <table>
                              <tbody>
                                <tr>
                                  <td>Total</td>
                                  <td className="colon">:</td>
                                  <td className="text">$1500</td>
                                </tr>
                                <tr>
                                  <td>Date</td>
                                  <td className="colon">:</td>
                                  <td className="text">11-09-2023 14:50:11</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <p className="p-4">
                          Customer need to recheck the product once
                        </p>
                        <div className="btn-row d-flex align-items-center justify-content-between">
                          <Link
                            to="#"
                            className="btn btn-info btn-icon flex-fill"
                          >
                            Open
                          </Link>
                          <Link
                            to="#"
                            className="btn btn-danger btn-icon flex-fill"
                          >
                            Products
                          </Link>
                          <Link
                            to="#"
                            className="btn btn-success btn-icon flex-fill"
                          >
                            Print
                          </Link>
                        </div>
                      </div>
                      <div className="default-cover p-4 mb-4">
                        <span className="badge bg-info d-inline-block mb-4">
                          Order ID : #666664
                        </span>
                        <div className="row">
                          <div className="col-sm-12 col-md-6 record mb-3">
                            <table>
                              <tbody>
                                <tr className="mb-3">
                                  <td>Cashier</td>
                                  <td className="colon">:</td>
                                  <td className="text">admin</td>
                                </tr>
                                <tr>
                                  <td>Customer</td>
                                  <td className="colon">:</td>
                                  <td className="text">Diego</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div className="col-sm-12 col-md-6 record mb-3">
                            <table>
                              <tbody>
                                <tr>
                                  <td>Total</td>
                                  <td className="colon">:</td>
                                  <td className="text">$30000</td>
                                </tr>
                                <tr>
                                  <td>Date</td>
                                  <td className="colon">:</td>
                                  <td className="text">12-09-2023 17:22:11</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <p className="p-4 mb-4">
                          Customer need to recheck the product once
                        </p>
                        <div className="btn-row d-flex align-items-center justify-content-between">
                          <Link
                            to="#"
                            className="btn btn-info btn-icon flex-fill"
                          >
                            Open
                          </Link>
                          <Link
                            to="#"
                            className="btn btn-danger btn-icon flex-fill"
                          >
                            Products
                          </Link>
                          <Link
                            to="#"
                            className="btn btn-success btn-icon flex-fill"
                          >
                            Print
                          </Link>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div className="tab-pane fade" id="paid" role="tabpanel">
                    <div className="table-top">
                      <div className="search-set w-100 search-order">
                        <div className="search-input w-100">
                          <input
                            type="text"
                            placeholder="Search"
                            className="form-control form-control-sm formsearch w-100"
                          />
                          <Link to className="btn btn-searchset">
                            <i data-feather="search" className="feather-search" />
                          </Link>
                        </div>
                      </div>
                    </div>
                    <div className="order-body">
                      <div className="default-cover p-4 mb-4">
                        <span className="badge bg-primary d-inline-block mb-4">
                          Order ID : #666665
                        </span>
                        <div className="row">
                          <div className="col-sm-12 col-md-6 record mb-3">
                            <table>
                              <tbody>
                                <tr className="mb-3">
                                  <td>Cashier</td>
                                  <td className="colon">:</td>
                                  <td className="text">admin</td>
                                </tr>
                                <tr>
                                  <td>Customer</td>
                                  <td className="colon">:</td>
                                  <td className="text">Hugo</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div className="col-sm-12 col-md-6 record mb-3">
                            <table>
                              <tbody>
                                <tr>
                                  <td>Total</td>
                                  <td className="colon">:</td>
                                  <td className="text">$5000</td>
                                </tr>
                                <tr>
                                  <td>Date</td>
                                  <td className="colon">:</td>
                                  <td className="text">13-09-2023 19:39:11</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <p className="p-4">
                          Customer need to recheck the product once
                        </p>
                        <div className="btn-row d-flex align-items-center justify-content-between">
                          <Link
                            to="#"
                            className="btn btn-info btn-icon flex-fill"
                          >
                            Open
                          </Link>
                          <Link
                            to="#"
                            className="btn btn-danger btn-icon flex-fill"
                          >
                            Products
                          </Link>
                          <Link
                            to="#"
                            className="btn btn-success btn-icon flex-fill"
                          >
                            Print
                          </Link>
                        </div>
                      </div>
                      <div className="default-cover p-4 mb-4">
                        <span className="badge bg-primary d-inline-block mb-4">
                          Order ID : #666666
                        </span>
                        <div className="row">
                          <div className="col-sm-12 col-md-6 record mb-3">
                            <table>
                              <tbody>
                                <tr className="mb-3">
                                  <td>Cashier</td>
                                  <td className="colon">:</td>
                                  <td className="text">admin</td>
                                </tr>
                                <tr>
                                  <td>Customer</td>
                                  <td className="colon">:</td>
                                  <td className="text">Antonio</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div className="col-sm-12 col-md-6 record mb-3">
                            <table>
                              <tbody>
                                <tr>
                                  <td>Total</td>
                                  <td className="colon">:</td>
                                  <td className="text">$7000</td>
                                </tr>
                                <tr>
                                  <td>Date</td>
                                  <td className="colon">:</td>
                                  <td className="text">15-09-2023 18:39:11</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <p className="p-4">
                          Customer need to recheck the product once
                        </p>
                        <div className="btn-row d-flex align-items-center justify-content-between">
                          <Link
                            to="#"
                            className="btn btn-info btn-icon flex-fill"
                          >
                            Open
                          </Link>
                          <Link
                            to="#"
                            className="btn btn-danger btn-icon flex-fill"
                          >
                            Products
                          </Link>
                          <Link
                            to="#"
                            className="btn btn-success btn-icon flex-fill"
                          >
                            Print
                          </Link>
                        </div>
                      </div>
                      <div className="default-cover p-4 mb-4">
                        <span className="badge bg-primary d-inline-block mb-4">
                          Order ID : #666667
                        </span>
                        <div className="row">
                          <div className="col-sm-12 col-md-6 record mb-3">
                            <table>
                              <tbody>
                                <tr className="mb-3">
                                  <td>Cashier</td>
                                  <td className="colon">:</td>
                                  <td className="text">admin</td>
                                </tr>
                                <tr>
                                  <td>Customer</td>
                                  <td className="colon">:</td>
                                  <td className="text">MacQuoid</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div className="col-sm-12 col-md-6 record mb-3">
                            <table>
                              <tbody>
                                <tr>
                                  <td>Total</td>
                                  <td className="colon">:</td>
                                  <td className="text">$7050</td>
                                </tr>
                                <tr>
                                  <td>Date</td>
                                  <td className="colon">:</td>
                                  <td className="text">17-09-2023 19:39:11</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <p className="p-4 mb-4">
                          Customer need to recheck the product once
                        </p>
                        <div className="btn-row d-flex align-items-center justify-content-between">
                          <Link
                            to="#"
                            className="btn btn-info btn-icon flex-fill"
                          >
                            Open
                          </Link>
                          <Link
                            to="#"
                            className="btn btn-danger btn-icon flex-fill"
                          >
                            Products
                          </Link>
                          <Link
                            to="#"
                            className="btn btn-success btn-icon flex-fill"
                          >
                            Print
                          </Link>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      {/* /Recent Transactions */}

      {/* Convenience Store Fuel Dispense Modal */}
      {showFuelModal && (
        <div
          className="modal fade show d-block"
          tabIndex="-1"
          style={{ backgroundColor: "rgba(0,0,0,0.6)" }}
        >
          <div className="modal-dialog modal-dialog-centered">
            <div className="modal-content">
              <div className="modal-header bg-dark text-white">
                <h5 className="modal-title text-white d-flex align-items-center gap-2">
                  <span>⛽</span> Dispense Fuel - Convenience Store POS
                </h5>
                <button
                  type="button"
                  className="btn-close btn-close-white"
                  onClick={() => setShowFuelModal(false)}
                />
              </div>
              <div className="modal-body">
                {/* Select Pump */}
                <div className="mb-3">
                  <label className="form-label fw-bold">Select Dispenser / Pump #</label>
                  <div className="d-flex flex-wrap gap-2">
                    {[1, 2, 3, 4, 5, 6, 7, 8].map((num) => (
                      <button
                        key={num}
                        type="button"
                        className={`btn btn-sm ${
                          selectedPump === num ? "btn-primary fw-bold" : "btn-outline-secondary"
                        }`}
                        onClick={() => setSelectedPump(num)}
                      >
                        Pump #{num}
                      </button>
                    ))}
                  </div>
                </div>

                {/* Select Grade */}
                <div className="mb-3">
                  <label className="form-label fw-bold">Fuel Grade</label>
                  <div className="row g-2">
                    <div className="col-4">
                      <button
                        type="button"
                        className={`btn w-100 p-2 text-start ${
                          selectedFuelGrade === "Gasoline 91"
                            ? "btn-success"
                            : "btn-outline-success"
                        }`}
                        onClick={() => handleGradeChange("Gasoline 91")}
                      >
                        <div className="fw-bold small">Unleaded 91</div>
                        <div className="small">${fuelPricing["Gasoline 91"]}/L</div>
                      </button>
                    </div>
                    <div className="col-4">
                      <button
                        type="button"
                        className={`btn w-100 p-2 text-start ${
                          selectedFuelGrade === "Gasoline 95"
                            ? "btn-primary"
                            : "btn-outline-primary"
                        }`}
                        onClick={() => handleGradeChange("Gasoline 95")}
                      >
                        <div className="fw-bold small">Super 95</div>
                        <div className="small">${fuelPricing["Gasoline 95"]}/L</div>
                      </button>
                    </div>
                    <div className="col-4">
                      <button
                        type="button"
                        className={`btn w-100 p-2 text-start ${
                          selectedFuelGrade === "Diesel"
                            ? "btn-warning text-dark"
                            : "btn-outline-warning text-dark"
                        }`}
                        onClick={() => handleGradeChange("Diesel")}
                      >
                        <div className="fw-bold small">Diesel</div>
                        <div className="small">${fuelPricing["Diesel"]}/L</div>
                      </button>
                    </div>
                  </div>
                </div>

                {/* Preset Amount */}
                <div className="mb-3">
                  <div className="d-flex justify-content-between align-items-center mb-1">
                    <label className="form-label fw-bold mb-0">Dispense Amount ($)</label>
                    <span className="small text-muted">
                      = {presetLiters} Liters @ ${fuelPricing[selectedFuelGrade]}/L
                    </span>
                  </div>
                  <div className="input-group mb-2">
                    <span className="input-group-text">$</span>
                    <input
                      type="number"
                      step="1"
                      className="form-control form-control-lg fw-bold text-success"
                      value={presetAmount}
                      onChange={(e) => handleFuelAmountChange(e.target.value)}
                    />
                  </div>
                  {/* Quick preset buttons */}
                  <div className="d-flex gap-1 flex-wrap">
                    {[10, 20, 30, 50, 100].map((amt) => (
                      <button
                        key={amt}
                        type="button"
                        className={`btn btn-sm ${
                          presetAmount === amt ? "btn-secondary" : "btn-outline-secondary"
                        }`}
                        onClick={() => handleFuelAmountChange(amt)}
                      >
                        ${amt}
                      </button>
                    ))}
                    <button
                      type="button"
                      className="btn btn-sm btn-outline-info"
                      onClick={() => handleFuelLitersChange(45)}
                    >
                      Full Tank (~45L)
                    </button>
                  </div>
                </div>

                {/* Liters Equivalent */}
                <div className="p-3 bg-light rounded border text-center">
                  <span className="text-muted small d-block">Authorized Fuel Volume:</span>
                  <h3 className="text-dark fw-bold mb-0">{presetLiters} Liters</h3>
                  <small className="text-muted">Total Due: ${presetAmount.toFixed(2)}</small>
                </div>
              </div>
              <div className="modal-footer">
                <button
                  type="button"
                  className="btn btn-secondary"
                  onClick={() => setShowFuelModal(false)}
                >
                  Cancel
                </button>
                <button
                  type="button"
                  className="btn btn-success fw-bold"
                  onClick={addFuelToCart}
                >
                  Add Fuel to POS Ticket
                </button>
              </div>
            </div>
          </div>
        </div>
      )}


    </div>
  )
}

export default Pos