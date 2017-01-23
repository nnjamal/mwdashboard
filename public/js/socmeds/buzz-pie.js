$.ajax({
    url : ajaxUrl + '/project/chart-data/buzz-pie/' + mediaId + '/' + type,
    data : data,
    beforeSend : function(xhr) {
        $('#buzzpie').block({
            message: '<img src="' + ajaxUrl + '/mediawave/img/spinner.gif">',
            css: { border: 'none', zIndex: 100 },
            overlayCSS: { backgroundColor: '#fff', zIndex: 100 }
        });
    },
    complete : function(xhr, status) {
        $('#buzzpie').unblock();
    },
    success : function(result) {
        buzzPieChart('buzzpie', jQuery.parseJSON(result));
    }
});

function buzzPieChart($id, $data) {
    $data = $data.data;
    if ($data.length === 0) {
        $('#' + $id).html("<div class='center'>No Data</div>");
    } else {
        var $content = [];
        for (var i = 0; i < $data.length; i++) {
            $keywordname = $data[i].keywordName;
            $buzz = $data[i].buzz;
            $content[i] = {name: $keywordname, y: $buzz};
        }
        createBuzzPieChart($content, $id);
    }
}

function createBuzzPieChart(dataSet, id) {
    $('#'+id).highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: null
        },
        tooltip: {
            //pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            pointFormat: 'Buzz: {point.y} ({point.percentage:.1f}%)'
        },
        /*plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },*/
        plotOptions: {
            pie: {
                allowPointSelect: true,
                dataLabels: {
                    enabled: true,
                    formatter: function() {
                        return Math.round(this.percentage*100)/100 + ' %';
                    },
                    distance: -25,
                    color:'white',
                    style: {
                        fontSize: 11,
                        fontWeight: 'normal'
                    }
                },
                showInLegend: true
            }
        },
        series: [{
            data: dataSet
        }]
    });
}
