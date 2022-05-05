var color_blue = '#1a48aa';

/**
 * Adds a formatted block for each drug entry appended into the container element with the provided container_id
 *
 * @param {Object} entry            - The component structured data
 * @param {string} container_id     - The selector ID for the element in which to insert the generated HTML
 */
 function addNESPlot(entry, container_id) {
    var newName = null;
    if (entry.name.match(/^\d/)) {
        newName = "x" + entry.name;
    } else {
        newName = entry.name;
    }
    newName = newName.replace(/\s/g, ""); //removes spaces

    if($('#'+newName+'-hdr-drugs').length == 0) { // checking if plot already exists
        var entryHtml = "";
        entryHtml += '<div class="row">';
        entryHtml +=    '<div class="col-md-12">';
        entryHtml +=       '<div class="card mb-2" id="card-blank">';
        entryHtml +=            '<h5 class="card-header" id="'+newName+'-hdr-drugs">';
        entryHtml +=                '<a style="color:white;" class="d-block" data-toggle="collapse" href="#'+newName+'-sec-drugs" aria-expanded="false" aria-controls="'+newName+'-sec-drugs">'+entry.name.replace(" 1", "")+'</a>';
        entryHtml +=            '</h5>';
        entryHtml +=            '<div class="card-body" id="'+newName+'-sec-drugs">';
        entryHtml +=                '<div id="'+newName+'-box-plot"></div>';
        entryHtml +=            '</div>';
        entryHtml +=        '</div>';
        entryHtml +=    '</div>';
        entryHtml += '</div>';
        $(container_id).append(entryHtml);

        // FIRST PLOT
        var drug_header = $('#' + newName + '-hdr-drugs');
        var drug_section = $('#' + newName + '-sec-drugs');
        var drug_box_plot_id = newName + '-box-plot';

        var drug_accepted_min = entry.accepted_min;
        var drug_accepted_max = entry.accepted_max;
        var drug_actual_min = entry.actual_min;
        var drug_actual_max = entry.actual_max;
        var drug_report_date = entry.date;
        var drug_RT = entry.RT;

        var dummyL = {
            x: [null],
            y: [null],
            name: 'NES Lower Limit',
            showlegend: true,
            mode: 'line',
            type: 'scatter',
            marker: {
                color: 'rgb(255, 0, 0)',
                size: 0,
            },
        };
        var dummyH = {
            x: [null],
            y: [null],
            name: 'NES IS Lower Limit',
            showlegend: true,
            mode: 'line',
            type: 'scatter',
            marker: {
                color: 'rgb(0, 255, 0)',
                size: 0,
            },
        };

        var drug_calculation0 = {
            x: [drug_report_date],
            y: [drug_actual_min],
            mode: 'markers',
            type: 'scatter',
            marker: {
                color: 'rgb(255, 0, 0)',
                size: 10,
            },
            text: ['NES Limit: '+drug_actual_min+'<br>'+entry.filename],
            showlegend: false,
        };
        if (drug_actual_min == -1) {
            drug_calculation0['text'] = ['<b>NES Lower Limit UNDEFINED</b><br>'+entry.filename];
        }

        var drug_calculation1 = {
            x: [drug_report_date],
            y: [drug_actual_max],
            mode: 'markers',
            type: 'scatter',
            marker: {
                color: 'rgb(0, 255, 0)',
                size: 10,
            },
            text: ['NES IS Limit: '+drug_actual_max+'<br>'+entry.filename],
            showlegend: false,
        };

        var retention_time = {
            x: [drug_report_date],
            y: [drug_RT],
            name: 'Retention Time',
            mode: 'markers',
            type: 'scatter',
            yaxis: 'y2',
            marker: {
                color: 'rgb(0, 0, 0)',
                size: 10,
            },
            text: ['Retention Time: '+drug_RT+'<br>'+entry.filename],
            showlegend: true,
        };

        if (drug_actual_max == -1) {
            drug_calculation1['text'] = ['<b>NES IS Limit UNDEFINED</b><br>'+entry.filename]
        }

        var layout = {
            hovermode: 'closest',
            title: {
                text:'NES/NES IS Lower Limits and Retention Times',
                xref: 'paper',
                font: {
                    size: 24,
                },
                x: 0.05,
            },
            xaxis: {
                title: {
                    text: 'Report Dates',
                },
            },
            yaxis: {
                title: {
                    text: 'Lower Limits',
                }
            },
            yaxis2:{
                title: 'Retention Time',
                overlaying: 'y',
                side: 'right',
            },
            shapes: [
            {
                type: 'line',
                xref: 'paper',
                x0: 0,
                y0: drug_accepted_max,
                x1: 1,
                y1: drug_accepted_max,
                line:{
                    color: 'rgb(0, 255, 0)',
                    width: 2,
                    //dash:'dashdot'
                },
            },
            {
                type: 'line',
                xref: 'paper',
                x0: 0,
                y0: drug_accepted_min,
                x1: 1,
                y1: drug_accepted_min,
                line:{
                    color: 'rgb(255, 0, 0)',
                    width: 2,
                    //dash:'dashdot'
                },
            }
            ],  
            legend: {
                orientation: "v",
                x: 1.1,
            xanchor: 'left',
                y: 1,
                font: {
              size: 9
            },
                borderwidth: 1
          }, 
        };
        
        drug_header.css('background-color', color_blue);
    
        Plotly.newPlot(drug_box_plot_id, [drug_calculation0, drug_calculation1, retention_time, dummyH, dummyL], layout);
        drug_section.on('shown.bs.collapse', function()  {
            Plotly.Plots.resize(drug_box_plot_id);
        });
        $(window).on('resize', function() {
            Plotly.Plots.resize(drug_box_plot_id);
        });
        // END FIRST PLOT

    } else {
        //FIRST PLOT
        var drug_box_plot_id = newName + '-box-plot';
        var drug_actual_min = entry.actual_min;
        var drug_actual_max = entry.actual_max;
        var drug_report_date = entry.date;
        var drug_RT = entry.RT;

        var update0 = {
            x: [drug_report_date],
            y: [drug_actual_min],
            mode: 'markers',
            type: 'scatter',
            marker: {
                color: 'rgb(255, 0, 0)',
                size: 10,
            },
            text: ['NES Limit: '+drug_actual_min+'<br>'+entry.filename],
            showlegend: false,
        };
        if (drug_actual_min == -1) {
            update0['text'] = ['<b>NES Lower Limit UNDEFINED</b><br>'+entry.filename];
        }

        var update1 = {
            x: [drug_report_date],
            y: [drug_actual_max],
            mode: 'markers',
            type: 'scatter',
            marker: {
                color: 'rgb(0, 255, 0)',
                size: 10,
            },
            text: ['NES IS Limit: '+drug_actual_max+'<br>'+entry.filename],
            showlegend: false,
        };

        if (drug_actual_max == -1) {
            update1['text'] = ['<b>NES IS Lower Limit UNDEFINED</b><br>'+entry.filename];
        }

        var RT_update = {
            x: [drug_report_date],
            y: [drug_RT],
            mode: 'markers',
            type: 'scatter',
            yaxis: 'y2',
            marker: {
                color: 'rgb(0, 0, 0)',
                size: 10,
            },
            text: ['Retention Time: '+drug_RT+'<br>'+entry.filename],
            showlegend: false,
        };

        Plotly.addTraces(drug_box_plot_id, [update0,update1,RT_update]);
        var drug_section = $('#' + newName + '-sec-drugs');
        drug_section.on('shown.bs.collapse', function()  {
            Plotly.Plots.resize(drug_box_plot_id);
        });
        $(window).on('resize', function() {
            Plotly.Plots.resize(drug_box_plot_id);
        });
        // END FIRST PLOT

    }
    return newName + '-box-plot';
}