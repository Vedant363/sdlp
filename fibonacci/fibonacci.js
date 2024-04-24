// Function to generate Fibonacci series
function generateFibonacciSeries(n) {
    let fibonacciSeries = [];
    if (n === 0) {
        return fibonacciSeries;
    }
    fibonacciSeries.push(0);
    if (n === 1) {
        return fibonacciSeries;
    }
    fibonacciSeries.push(1);
    for (let i = 2; i < n; i++) {
        let nextFibonacciNumber = fibonacciSeries[i - 1] + fibonacciSeries[i - 2];
        fibonacciSeries.push(nextFibonacciNumber);
    }
    return fibonacciSeries;
}

// Display Fibonacci series on HTML page
function displayFibonacciSeries() {
    const n = parseInt(prompt("Enter the number of terms for Fibonacci series:"));
    const fibonacciSeries = generateFibonacciSeries(n);
    const fibonacciSeriesElement = document.getElementById('fibonacci-series');
    fibonacciSeriesElement.innerHTML = '<strong>Fibonacci Series:</strong> ' + fibonacciSeries.join(', ');
}

displayFibonacciSeries();
