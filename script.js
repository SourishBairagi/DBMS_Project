// Sales by Product Chart
const productSalesChart = new Chart(document.getElementById('productSalesChart'), {
    type: 'bar',
    data: {
      labels: ['Product A', 'Product B', 'Product C', 'Product D'],
      datasets: [{
        label: 'Sales ($)',
        data: [500, 350, 700, 200],
        backgroundColor: ['#4caf50', '#2196f3', '#ff9800', '#f44336']
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: {
          display: true,
          position: 'top'
        }
      }
    }
  });
  
  // Monthly Sales Trend Chart
  const monthlySalesChart = new Chart(document.getElementById('monthlySalesChart'), {
    type: 'line',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
      datasets: [{
        label: 'Monthly Sales ($)',
        data: [1000, 1200, 1500, 2000, 2500, 1800, 2200, 2400, 2600, 3000, 3200, 3500],
        borderColor: '#3e95cd',
        fill: false
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: {
          display: true,
          position: 'top'
        }
      }
    }
  });
  
  // Stock Levels Chart
  const stockChart = new Chart(document.getElementById('stockChart'), {
    type: 'pie',
    data: {
      labels: ['Product A', 'Product B', 'Product C', 'Product D'],
      datasets: [{
        data: [120, 80, 50, 150],
        backgroundColor: ['#4caf50', '#2196f3', '#ff9800', '#f44336']
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: {
          display: true,
          position: 'top'
        }
      }
    }
  });
  