import ApexCharts from 'apexcharts'

//Coversions
let conversionsChart = {
  chart: {
    type: 'bar',
    height: '100%',
    toolbar: {
      show: false,
      },
  },
  plotOptions: {
      bar: {
          columnWidth: 25,
          borderRadius: 5,
      },
  },
  dataLabels:{
    enabled: false,
  },
  colors:['#F472B6'],
  series: [{
    name: 'sales',
    data: [8,15,30,25,40,55,69,71,85,62,47,90]
  }],
  xaxis: {
    categories: ['JAN','FEB','MAR','APR','MAY','JUN','JUL','AUG','SEP','OCT','NOV','DEC',]
  },
  yaxis: {
    labels: {
      formatter: function (value) {
        return value + " %";
      }
    },
  },
  
}

//Traffic Channels
let trafficChannels = {
  series: [44, 55, 41],
  labels: ['Direct', 'Organic', 'Referral'],
  chart: {
  type: 'donut',
  },
  legend: {
    position: 'bottom',
    fontSize: '12px',
    markers: {
      width: 8,
      height: 8,
    },
  },
  colors:['#F472B6', '#C084FC', '#818CF8'],
  plotOptions: {
    pie: {
      donut: {
        size: '90%',
      }
    }
  },
  stroke:{
    show: false,
  },
  dataLabels: {
    enabled: false
  },
}

//Sales
let salesChart = {
  series: [{
    name: "Sales",
    data: [0, 200, 10, 400, 80, 600, 120, 700, 150, 999, 200, 666]
  }],
  chart: {
    height: '100%',
    toolbar: {
      show: false,
    },
    type: 'line',
    zoom: {
      enabled: false
    }
  },
  dataLabels: {
    enabled: false
  },
  colors:['#E879F9'],
  stroke: {
    curve: 'smooth',
  },
  xaxis: {
    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
  },
  yaxis: {
    labels: {
      formatter: function (value) {
        return "$ " + value;
      }
    },
  },
}
let conversions = new ApexCharts(document.querySelector("#conversions"), conversionsChart);
let traffic = new ApexCharts(document.querySelector("#traffic_channels"), trafficChannels);
let sales = new ApexCharts(document.querySelector("#sales"), salesChart);

conversions.render();
traffic.render();
sales.render();