// Define initial data for the chart
const initialData = {
  labels: ['dusheni', 'puja', 'ranjan', 'anjana', 'raveen', 'shanudri', 'rithu', 'shalani', 'hemal', 'madawa', 'rodney', 'nayanathara', 'kavihari', 'dilhani', 'gayan'],
  datasets: [{
    label: 'Dynamic Pie Chart',
    data: [0, 0, 0, 0, 0, 0, 0, 0, 0 ,0 ,0 ,0, 0, 0, 0],
    backgroundColor: [
      'red',
      'blue',
      'green',
      'yellow',
      'purple',
      'pink',
      'black',
      'orange',
      'lightgreen',
      'cyan',
      'maroon',
      'teal',
      'silver',
      'gold',
      'lavender'
    ]
  }]
};

// Get the canvas element
const ctx = document.getElementById('myChart').getContext('2d');

// Initialize the chart
const myChart = new Chart(ctx, {
  type: 'pie',
  data: initialData,
});

// Function to handle voting for options
function voteOption(option) {
  const index = initialData.labels.indexOf(option);
  if (index !== -1) {
    myChart.data.datasets[0].data[index]++;
    myChart.update();
  }
}