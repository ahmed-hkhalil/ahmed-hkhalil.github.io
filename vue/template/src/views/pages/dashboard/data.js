const basicAreaChart = {
  sline: {
    chart: {
      id: "vuechart-example",
      type: "bar",
      height: 300,
      stacked: true,
      toolbar: {
        show: false,
      },
      zoom: {
        enabled: true,
      },
    },

    colors: ["#28C76F", "#EA5455"],
    dataLabels: {
      enabled: false,
    },
    responsive: [
      {
        breakpoint: 280,
        options: {
          legend: {
            position: "",
            offsetY: 40,
          },
        },
      },
    ],
    plotOptions: {
      bar: {
        horizontal: false,
        borderRadius: 4,
        columnWidth: "20%",
        endingShape: "rounded",
        borderRadiusApplication: "end", // "around" / "end"
        borderRadiusWhenStacked: "all", // "all"/"last"
      },
    },
    xaxis: {
      categories: [
        " Jan ",
        "feb",
        "march",
        "april",
        "may",
        "june",
        "july",
        "auguest",
      ],
    },
    fill: {
      opacity: 1,
    },
  },
  series: [
    {
      name: "Sales",
      data: [50, 45, 60, 70, 50, 45, 60, 70],
    },
    {
      name: "Purchase",
      data: [-21, -54, -45, -35, -21, -54, -45, -35],
    },
  ],
};

const salesAnalysis = {
  series: [
    {
      name: "Sales Analysis",
      data: [25, 30, 18, 15, 22, 20, 30, 20, 22, 18, 15, 20],
    },
  ],
  sline: {
    chart: {
      height: 273,
      type: "area",
      zoom: {
        enabled: false,
      },
    },
    colors: ["#FF9F43"],
    dataLabels: {
      enabled: false,
    },
    stroke: {
      curve: "straight",
    },
    title: {
      text: "",
      align: "left",
    },
    xaxis: {
      categories: [
        "Jan",
        "Feb",
        "Mar",
        "Apr",
        "May",
        "Jun",
        "Jul",
        "Aug",
        "Sep",
      ],
    },
    yaxis: {
      min: 10,
      max: 60,
      tickAmount: 5,
      labels: {
        formatter: (val) => {
          return val / 1 + "K";
        },
      },
    },
    legend: {
      position: "top",
      horizontalAlign: "left",
    },
  },
};

export { basicAreaChart, salesAnalysis };
