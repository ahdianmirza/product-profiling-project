google.charts.load("current", { packages: ["corechart"] });
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
  const data = google.visualization.arrayToDataTable([
    ["Character", "Precentage"],
    ["Pemikir", 31],
    ["Direktur", 15],
    ["Sosialita", 15],
    ["Pendamai", 39],
  ]);

  const options = {
    title: "Character",
    is3D: true,
  };

  const chart = new google.visualization.PieChart(
    document.getElementById("piechart")
  );

  chart.draw(data, options);
}

function drawChart2() {
    // setup
const data = {
  labels: ["Written Communication", "Oral Communication"],
  datasets: [
    {
      label: "Communication Potential",
      data: [76, 60],
      backgroundColor: ["rgba(1, 32, 96, 1)", "rgba(237, 125, 49, 1)"],
      borderWidth: 1,
    },
  ],
};

// config
const config = {
  type: "bar",
  data,
  options: {
    plugins: {
        legend: {
            display: false
        }
    },
    indexAxis: "y",
    scales: {
      x: {
        beginAtZero: true,
        min: 0,
        max: 100,
        ticks: {
          stepSize: 25,
        },
      },
    },
  },
};

// render init block
const myChart = new Chart(document.getElementById("myChart"), config);
}

function drawChart3() {
    // setup 
    const data = {
      labels: ['Processing', 'Energy', 'Work Standard', 'Follow Up', 'Information Monitoring', 'Attention to Detail', 'Innitiative', 'Technical Ability'],
      datasets: [{
        label: 'Weekly Sales',
        data: [75, 47, 60, 60, 68, 73, 48, 75],
        backgroundColor: [
          'rgba(254, 0, 0, 1)',
          'rgba(255, 192, 0, 1)',
          'rgba(237, 125, 49, 1)',
          'rgba(90, 155, 213, 1)',
          'rgba(83, 130, 52, 1)',
          'rgba(45, 85, 155, 1)',
          'rgba(112, 48, 160, 1)',
          'rgba(112, 173, 70, 1)'
        ],
        borderColor: [
          'rgba(254, 0, 0, 0.3)',
          'rgba(255, 192, 0, 0.3)',
          'rgba(237, 125, 49, 0.3)',
          'rgba(90, 155, 213, 0.3)',
          'rgba(83, 130, 52, 0.3)',
          'rgba(45, 85, 155, 0.3)',
          'rgba(112, 48, 160, 0.3)',
          'rgba(112, 173, 70, 0.3)'
        ],
        borderWidth: 2
      }]
    };

    // config 
    const config = {
      type: 'bar',
      data,
      options: {
        plugins: {
        legend: {
            display: false
        }
    },
        scales: {
          y: {
            beginAtZero: true,
            min: 0,
            max: 100,
            ticks: {
              stepSize: 25,
            }
          }
        }
      }
    };

    // render init block
    const myChart2 = new Chart(
      document.getElementById('myChart2'),
      config
    );
}

function drawChart4() {
    // setup 
    const data = {
      labels: ['Individual Leadership', 'Strategic Leadership', 'Managerial Leadership', 'Coaching', 'Judgement', 'Risk Taking', 'Organizational Awareness'],
      datasets: [{
        label: 'Leadership Potential',
        data: [50, 70, 55, 70, 55, 50, 75],
        backgroundColor: [
          'rgba(237, 125, 49, 1)',
          'rgba(255, 0, 0, 1)',
          'rgba(132, 60, 12, 1)',
          'rgba(0, 176, 240, 1)',
          'rgba(84, 130, 53, 1)',
          'rgba(112, 48, 160, 1)',
          'rgba(47, 85, 151, 1)'
        ],
        borderColor: [
          'rgba(237, 125, 49, 0.3)',
          'rgba(255, 0, 0, 0.3)',
          'rgba(132, 60, 12, 0.3)',
          'rgba(0, 176, 240, 0.3)',
          'rgba(84, 130, 53, 0.3)',
          'rgba(112, 48, 160, 0.3)',
          'rgba(47, 85, 151, 0.3)'
        ],
        borderWidth: 2
      }]
    };

    // config 
    const config = {
      type: 'bar',
      data,
      options: {
        plugins: {
        legend: {
            display: false
        }
    },
        scales: {
          y: {
            beginAtZero: true,
            min: 0,
            max: 100,
            ticks: {
              stepSize: 25,
            }
          }
        }
      }
    };

    // render init block
    const myChart = new Chart(
      document.getElementById('myChart3'),
      config
    );
}

function drawChart5() {
    // setup 
    const data = {
      labels: ['Analysis', 'Creating', 'Learning Ability', 'Innovation'],
      datasets: [{
        label: 'Creativity Potential',
        data: [55, 72, 68, 50],
        backgroundColor: [
          'rgba(254, 0, 0, 1)',
          'rgba(112, 48, 160, 1)',
          'rgba(131, 61, 12, 1)',
          'rgba(195, 92, 17, 1)'
        ],
        borderColor: [
          'rgba(254, 0, 0, 0.3)',
          'rgba(112, 48, 160, 0.3)',
          'rgba(131, 61, 12, 0.3)',
          'rgba(195, 92, 17, 0.3)'
        ],
        borderWidth: 2
      }]
    };

    // config 
    const config = {
      type: 'bar',
      data,
      options: {
        plugins: {
        legend: {
            display: false
        }
    },
        indexAxis: "y",
        scales: {
          x: {
            beginAtZero: true,
            min: 0,
            max: 100,
            ticks: {
              stepSize: 25,
            },
          },
        }
      }
    };

    // render init block
    const myChart = new Chart(
      document.getElementById('myChart4'),
      config
    );
}

function drawChart6() {
    // setup 
    const data = {
      labels: ['Team Player', 'Influencing', 'Persuasiveness'],
      datasets: [{
        label: 'Teamwork Potential',
        data: [70, 50, 65],
        backgroundColor: [
          'rgba(90, 155, 213, 1)',
          'rgba(68, 115, 197, 1)',
          'rgba(47, 85, 149, 1)'
        ],
        borderColor: [
          'rgba(90, 155, 213, 0.3)',
          'rgba(68, 115, 197, 0.3)',
          'rgba(47, 85, 149, 0.3)'
        ],
        borderWidth: 2
      }]
    };

    // config 
    const config = {
      type: 'bar',
      data,
      options: {
        plugins: {
        legend: {
            display: false
        }
    },
        indexAxis: "y",
        scales: {
          x: {
            beginAtZero: true,
            min: 0,
            max: 100,
            ticks: {
              stepSize: 25,
            },
          },
        }
      }
    };

    // render init block
    const myChart = new Chart(
      document.getElementById('myChart5'),
      config
    );
}

function drawChart7() {
    // setup 
    const data = {
      labels: ['Adaptability', 'none'],
      datasets: [{
        label: 'Teamwork Potential',
        data: [51, 49],
        backgroundColor: [
            'rgba(49, 84, 150, 1)',
            'rgba(213, 220, 226, 1)'
        ]
      }]
    };

    // config 
    const config = {
      type: 'doughnut',
      data,
      options: {
        plugins: {
        legend: {
            display: false
        }
    },
        indexAxis: "x",
      }
    };

    // render init block
    const myChart = new Chart(
      document.getElementById('myChart6'),
      config
    );
}

function drawChart8() {
    // setup 
    const data = {
      labels: ['Stress Tollerance', 'none'],
      datasets: [{
        label: 'Teamwork Potential',
        data: [57, 43],
        backgroundColor: [
          'rgba(239, 126, 47, 1)',
          'rgba(249, 219, 204, 1)'
        ]
      }]
    };

    // config 
    const config = {
      type: 'doughnut',
      data,
      options: {
        plugins: {
        legend: {
            display: false
        }
    },
        indexAxis: "x",
      }
    };

    // render init block
    const myChart = new Chart(
      document.getElementById('myChart7'),
      config
    );
}

function drawChart9() {
    // setup 
    const data = {
      labels: ['Tenacity', 'none'],
      datasets: [{
        label: 'Teamwork Potential',
        data: [60, 40],
        backgroundColor: [
          'rgba(253, 1, 4, 1)',
          'rgba(249, 205, 202, 1)'
        ]
      }]
    };

    // config 
    const config = {
      type: 'doughnut',
      data,
      options: {
        plugins: {
        legend: {
            display: false
        }
    },
        indexAxis: "x",
      }
    };

    // render init block
    const myChart = new Chart(
      document.getElementById('myChart8'),
      config
    );
}

function drawChart10() {
    // setup 
    const data = {
      labels: ['Executives', 'none'],
      datasets: [{
        label: 'Teamwork Potential',
        data: [57, 43],
        backgroundColor: [
          'rgba(197, 91, 16, 1)',
          'rgba(234, 234, 234, 1)'
        ]
      }]
    };

    // config 
    const config = {
      type: 'doughnut',
      data,
      options: {
        plugins: {
        legend: {
            display: false
        }
    },
        indexAxis: "x",
      }
    };

    // render init block
    const myChart = new Chart(
      document.getElementById('myChart9'),
      config
    );
}

function drawChart11() {
    // setup 
    const data = {
      labels: ['Self Employed', 'none'],
      datasets: [{
        label: 'Teamwork Potential',
        data: [60, 40],
        backgroundColor: [
          'rgba(254, 0, 2, 1)',
          'rgba(234, 234, 234, 1)'
        ]
      }]
    };

    // config 
    const config = {
      type: 'doughnut',
      data,
      options: {
        plugins: {
        legend: {
            display: false
        }
    },
        indexAxis: "x",
      }
    };

    // render init block
    const myChart = new Chart(
      document.getElementById('myChart10'),
      config
    );
}

function drawChart12() {
    // setup 
    const data = {
      labels: ['Busines Owner', 'none'],
      datasets: [{
        label: 'Teamwork Potential',
        data: [50, 50],
        backgroundColor: [
          'rgba(46, 117, 181, 1)',
          'rgba(234, 234, 234, 1)'
        ]
      }]
    };

    // config 
    const config = {
      type: 'doughnut',
      data,
      options: {
        plugins: {
        legend: {
            display: false
        }
    },
        indexAxis: "x",
      }
    };

    // render init block
    const myChart = new Chart(
      document.getElementById('myChart11'),
      config
    );
}

function drawChart13() {
    // setup 
    const data = {
      labels: ['Busines Owner', 'none'],
      datasets: [{
        label: 'Teamwork Potential',
        data: [30, 70],
        backgroundColor: [
          'rgba(255, 192, 0, 1)',
          'rgba(234, 234, 234, 1)'
        ]
      }]
    };

    // config 
    const config = {
      type: 'doughnut',
      data,
      options: {
        plugins: {
        legend: {
            display: false
        }
    },
        indexAxis: "x",
      }
    };

    // render init block
    const myChart = new Chart(
      document.getElementById('myChart12'),
      config
    );
}

function drawChart14() {
    // setup 
    const data = {
      labels: ['Safety', 'Planing Organizing', 'Negotiation', 'Directing'],
      datasets: [{
        label: 'Creativity Potential',
        data: [75, 60, 50, 60],
        backgroundColor: [
          'rgba(0, 32, 96, 1)',
          'rgba(0, 32, 96, 1)',
          'rgba(0, 32, 96, 1)',
          'rgba(0, 32, 96, 1)'
        ],
        borderColor: [
          'rgba(0, 32, 96, 0.3)',
          'rgba(0, 32, 96, 0.3)',
          'rgba(0, 32, 96, 0.3)',
          'rgba(0, 32, 96, 0.3)'
        ],
        borderWidth: 2
      }]
    };

    // config 
    const config = {
      type: 'bar',
      data,
      options: {
        plugins: {
        legend: {
            display: false
        }
    },
        indexAxis: "y",
        scales: {
          x: {
            beginAtZero: true,
            min: 0,
            max: 100,
            ticks: {
              stepSize: 25,
            },
          },
        }
      }
    };

    // render init block
    const myChart = new Chart(
      document.getElementById('myChart13'),
      config
    );
}

function drawChart15() {
  const data = {
      labels: ['Resillience', 'Persisting', 'Detailing'],
      datasets: [{
        label: 'Leadership Potential',
        data: [50, 55, 60],
        backgroundColor: [
          'rgba(255, 0, 0, 1)',
          'rgba(132, 60, 12, 1)',
          'rgba(237, 125, 49, 1)'
        ],
        borderColor: [
          'rgba(255, 0, 0, 0.3)',
          'rgba(132, 60, 12, 0.3)',
          'rgba(237, 125, 49, 0.3)'
        ],
        borderWidth: 2
      }]
    };

    // config 
    const config = {
      type: 'bar',
      data,
      options: {
        maintainAspectRatio: false,
        plugins: {
        legend: {
            display: false
        }
    },
        scales: {
          y: {
            beginAtZero: true,
            min: 0,
            max: 100,
            ticks: {
              stepSize: 25,
            }
          }
        }
      }
    };

    // render init block
    const myChart = new Chart(
      document.getElementById('myChart14'),
      config
    );
}

function drawChart16() {
  const data = {
      labels: [
        ['Customer', 'Service'],
        ['Image &', 'impact'],
        'Integrity'],
      datasets: [{
        label: 'Leadership Potential',
        data: [55, 48, 75],
        backgroundColor: [
          'rgba(68, 114, 196, 1)',
          'rgba(0, 176, 240, 1)',
          'rgba(0, 32, 96, 1)'
        ],  
        borderColor: [
          'rgba(68, 114, 196, 0.3)',
          'rgba(0, 176, 240, 0.3)',
          'rgba(0, 32, 96, 0.3)'
        ],
        borderWidth: 2
      }]
    };

    // config 
    const config = {
      type: 'bar',
      data,
      options: {
        plugins : {
          tooltip: {
            callbacks: {
              title: (context) => {
                console.log(context[0].label);
                return context[0].label.replaceAll(',', ' ');
              }
            }
          }
        },
        maintainAspectRatio: false,
        plugins: {
        legend: {
            display: false
        }
    },
        scales: {
          y: {
            beginAtZero: true,
            min: 0,
            max: 100,
            ticks: {
              stepSize: 25,
            }
          }
        }
      }
    };

    // render init block
    const myChart = new Chart(
      document.getElementById('myChart15'),
      config
    );
}

window.onload = function() {
    Chart.defaults.font.size = 10;

    drawChart2();
    drawChart3();
    drawChart4();
    drawChart5();
    drawChart6();
    drawChart7();
    drawChart8();
    drawChart9();
    drawChart10();
    drawChart11();
    drawChart12();
    drawChart13();
    drawChart14();
    drawChart15();
    drawChart16();
}

