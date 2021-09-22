

// Set up the chart
Highcharts.chart('container', {
  chart: {
    type: 'pyramid3d',
    options3d: {
      enabled: true,
      alpha: 10,
      depth: 50,
      viewDistance: 50
    }
  },
  title: {
    text: ''
  },
  plotOptions: {
    series: {
      dataLabels: {
        enabled: true,
        format: '<b>{point.name}</b> ({point.y:,.0f})',
        allowOverlap: true,
        x: 10,
        y: -5
      },
      width: '60%',
      height: '80%',
      center: ['50%', '45%']
    }
  },
   series: [{
    type: 'pyramid3d',
    name: 'Work Attitude',
    data: [
      ['<p>Working condition</p> <p>1.10</p>', 1.10],
      ['<p>Independence</p> <p>2.8</p>', 2.8],
       ['<p>Support</p> <p>12.8</p>',12.8],
      ['<p>Recognition</p> <p>8.5</p>', 8.5],
      ['<p>Achivement</p> <p>6.2</p>', 6.2],
      
    ]
  }]
});

// Set up the chart
Highcharts.chart('container2', {
  chart: {
    type: 'funnel3d',
    options3d: {
      enabled: true,
      alpha: 10,
      depth: 50,
      viewDistance: 50
    }
  },
  title: {
    text: ''
  },
  plotOptions: {
    series: {
      dataLabels: {
        enabled: true,
        format: '<b>{point.name}</b> ({point.y:,.0f})',
        allowOverlap: true,
        y: 10
      },
      neckWidth: '30%',
      neckHeight: '25%',
      width: '80%',
      height: '80%'
    }
  },
  series: [{
    name: 'Learning Style',
   data: [
      ['Visual <p>(17%)</p>',17],
      ['Read and Write <p>(30%)</p>',30],
      ['Aural <p>(40%)</p>',40],
      ['Kinesthetic <p>(10%)</p>',10],
      
    ]
  }]
});
Highcharts.chart('container88', {
  chart: {
    type: 'column',
    options3d: {
      enabled: true,
      alpha: 10,
      beta: 25,
      depth: 70
    }
  },
  title: {
    text: ''
  },
  subtitle: {
    text: ''
  },
  plotOptions: {
    column: {
      depth: 25
    }
  },
  xAxis: {
    categories: ['Social', 'Investigative', 'Enterprising', 'Artistic', 'Conventional', 'Realistic'],
    labels: {
      skew3d: true,
      style: {
        fontSize: '16px'
      }
    }
  },
  yAxis: {
    title: {
      text: null
    }
  },
  series: [{
    type: 'column',
    name: 'Career Aptitude',
    data: [
      ['Social', 7],
      ['Investigative', 3],
      ['Enterprising', 1],
      ['Artistic', 6],
      ['Conventional', 8],
      ['Realistic', 4],
      
    ]
  }]
});
Highcharts.chart('container0', {
  chart: {
    type: 'pie',
    options3d: {
      enabled: true,
      alpha: 45,
      beta: 0
    }
  },
  title: {
    text: ''
  },
  accessibility: {
    point: {
      valueSuffix: '%'
    }
  },
  tooltip: {
    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
  },
  plotOptions: {
    pie: {
      allowPointSelect: true,
      cursor: 'pointer',
      depth: 35,
      dataLabels: {
        enabled: true,
        format: '{point.name}'
      }
    }
  },
  series: [{
    type: 'pie',
    name: 'Innate Ability',
    data: [
      ['Mathematical Logical', 8],
      ['Verbal Linguistic', 3],
      ['Intrapersonal', 1],
      {
        name: '<p>Interpersonal</p> <p>12.8</p>',
        y: 12.8,
        sliced: true,
        selected: true
      },
      ['Existential', 8],
      ['Naturalist', 4],
      ['Musical/Artistic', 4],
      ['Visual Spatial', 1],
      ['Bodily Kinesthetic', 1]
    ]
  }]
});


// Make monochrome colors
var pieColors = (function () {
  var colors = [],
    base = Highcharts.getOptions().colors[0],
    i;

  for (i = 0; i < 10; i += 1) {
    // Start out with a darkened base color (negative brighten), and end
    // up with a much brighter color
    colors.push(Highcharts.color(base).brighten((i - 3) / 7).get());
  }
  return colors;
}());

// Build the chart
Highcharts.chart('container3', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Past Performance'
  },
  tooltip: {
    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
  },
  accessibility: {
    point: {
      valueSuffix: '%'
    }
  },
  plotOptions: {
    pie: {
      allowPointSelect: true,
      cursor: 'pointer',
      colors: pieColors,
      dataLabels: {
        enabled: true,
        format: '<b>{point.name}</b><br>{point.percentage:.1f} %',
        distance: -50,
        filter: {
          property: 'percentage',
          operator: '>',
          value: 4
        }
      }
    }
  },
  series: [{
    name: 'Performance by Class',
    data: [
      { name: '2th', y: 61.41 },
      { name: '5th', y: 11.84 },
      { name: '6th', y: 10.85 },
      { name: '8th', y: 4.67 },
      { name: '9th', y: 4.18 },
      { name: '10th', y: 7.05 }
    ]
  }]
});


Highcharts.chart('container4', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Subject wise progress'
  },
  tooltip: {
     pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
  },
  accessibility: {
    point: {
      valueSuffix: '%'
    }
  },
  plotOptions: {
    pie: {
      allowPointSelect: true,
      cursor: 'pointer',
      dataLabels: {
        enabled: true,
         format: '<b>{point.name}</b>: {point.percentage:.1f} %'
      },
      showInLegend: true
    }
  },
  series: [{
    name: 'Subject wise progress',
    colorByPoint: true,
    data: [{
      name: 'Mathematics',
      y: 61.41,
      sliced: true,
      selected: true
    }, {
      name: 'Chemistry',
      y: 11.84
    }, {
      name: 'Business Studies',
      y: 10.85
    }, {
      name: 'Home Science',
      y: 4.67
    }, {
      name: 'Accountancy',
      y: 4.18
    }, {
      name: 'Physical Education',
      y: 1.64
    }]
  }]
});




var gaugeOptions = {
  chart: {
    type: 'solidgauge'
  },

  title: null,

  pane: {
    center: ['50%', '85%'],
    size: '140%',
    startAngle: -90,
    endAngle: 90,
    background: {
      backgroundColor:
        Highcharts.defaultOptions.legend.backgroundColor || '#EEE',
      innerRadius: '60%',
      outerRadius: '100%',
      shape: 'arc'
    }
  },

  exporting: {
    enabled: false
  },

  tooltip: {
    enabled: false
  },

  // the value axis
  yAxis: {
    stops: [
      [0.1, '#55BF3B'], // green
      [0.5, '#DDDF0D'], // yellow
      [0.9, '#DF5353'] // red
    ],
    lineWidth: 0,
    tickWidth: 0,
    minorTickInterval: null,
    tickAmount: 2,
    title: {
      y: -70
    },
    labels: {
      y: 16
    }
  },

  plotOptions: {
    solidgauge: {
      dataLabels: {
        y: 5,
        borderWidth: 0,
        useHTML: true
      }
    }
  }
};

// The speed gauge
var chartSpeed = Highcharts.chart('container-speed', Highcharts.merge(gaugeOptions, {
  yAxis: {
    min: 0,
    max: 6000,
    title: {
      text: 'Career'
    }
  },

  credits: {
    enabled: false
  },

  series: [{
    name: 'Career',
    data: [1000],
    dataLabels: {
      format:
        '<div style="text-align:center">' +
        '<span style="font-size:25px">{y}</span><br/>' +
        '<span style="font-size:12px;opacity:0.4">Number of Employees</span>' +
        '</div>'
    },
    tooltip: {
      valueSuffix: ' Number of Employees'
    }
  }]

}));

