<script type="text/javascript">
  new Morris.Bar({
    // ID of the element in which to draw the chart.
    element: 'bar-chart',
    // Chart data records -- each entry in this array corresponds to a point on
    // the chart.
    data: [
      { year: '2008', value: 20 },
      { year: '2009', value: 10 },
      { year: '2010', value: 5 },
      { year: '2011', value: 5 },
      { year: '2012', value: 20 }
    ],
    // The name of the data record attribute that contains x-values.
    xkey: 'year',
    // A list of names of data record attributes that contain y-values.
    ykeys: ['value'],
    // Labels for the ykeys -- will be displayed when you hover over the
    // chart.
    labels: ['Value'],
    hideHover: true,
    barColors: 'rgb(23,45,67)'
  });
</script>

<script type="text/javascript">
  var day_data = [
    {"period": "2012-10-01", "licensed": 3407, "sorned": 660},
    {"period": "2012-09-30", "licensed": 3351, "sorned": 629},
    {"period": "2012-09-29", "licensed": 3269, "sorned": 618},
    {"period": "2012-09-20", "licensed": 3246, "sorned": 661},
    {"period": "2012-09-19", "licensed": 3257, "sorned": 667},
    {"period": "2012-09-18", "licensed": 3248, "sorned": 627},
    {"period": "2012-09-17", "licensed": 3171, "sorned": 660},
    {"period": "2012-09-16", "licensed": 3171, "sorned": 676},
    {"period": "2012-09-15", "licensed": 3201, "sorned": 656},
    {"period": "2012-09-10", "licensed": 3215, "sorned": 622}
  ];
  new Morris.Bar({
    element: 'graph',
    data: day_data,
    xkey: 'period',
    ykeys: ['licensed', 'sorned'],
    labels: ['Licensed', 'SORN'],
    hideHover: true,
    xLabelAngle: 35,
    resize: true,
    barColors: ['#26B99A', '#34495E', '#ACADAC', '#3498DB']
  });
</script>