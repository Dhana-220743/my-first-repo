<!DOCTYPE html>
<html>
<head>
<title>Ekart Dashboard</title>
</head>

<body>

<h1>Welcome to Ekart Admin</h1>

<canvas id="expenseChart" width="600" height="350"></canvas>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
const ctx = document.getElementById('expenseChart');

new Chart(ctx, {
type: 'pie',
data: {
labels: ['Food', 'Travel', 'Shopping'],
datasets: [{
data: [2000,1500,1000]
}]
},
options:{
    responsive:false
}
});
</script>

</body>
</html>