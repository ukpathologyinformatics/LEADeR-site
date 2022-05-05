var color_blue = '#1a48aa';

/**
 * Adds a formatted block for each drug entry appended into the container element with the provided container_id
 *
 * @param {Object} entry            - The component structured data 
 * @param {string} container_id     - The selector ID for the element in which to insert the generated HTML
 * @param {int} type                - Can be low, medium, or high, depending on the UTAK number.
 */
 function addQCPlot(entry, container_id, type) {
    var newName = null;
    if (entry.name.match(/^\d/)) {
        newName = "x" + entry.name;
    } else {
        newName = entry.name;
    }
    newName = newName.replace(/\s/g, ""); //removes spaces

    if (!(type.toLowerCase() == "low" || type.toLowerCase() == "medium" || type.toLowerCase() == "high")) {
        console.error("Graph type must be \"Low\", \"Medium\", or \"Upper\".");
        return -1
    }

    if($('#'+newName+'-hdr-drugs-'+type).length == 0) { // checking if plot already exists
        var entryHtml = "";
        entryHtml += '<div class="row">';
        entryHtml +=    '<div class="col-md-12">';
        entryHtml +=       '<div class="card mb-2" id="card-blank">';
        entryHtml +=            '<h5 class="card-header" id="'+newName+'-hdr-drugs-'+type+'">';
        entryHtml +=                '<a style="color:white;" class="d-block" data-toggle="collapse" href="#'+newName+'-sec-drugs-'+type+'" aria-expanded="false" aria-controls="'+newName+'-sec-drugs-'+type+'">'+entry.name.replace(" 1", "")+' '+ type+ '</a>';
        entryHtml +=            '</h5>';
        entryHtml +=            '<div class="card-body" id="'+newName+'-sec-drugs-'+type+'">';
        entryHtml +=                '<div id="'+newName+'-box-plot-'+type+'"></div>';
        entryHtml +=            '</div>';
        entryHtml +=        '</div>';
        entryHtml +=    '</div>';
        entryHtml += '</div>';
        $(container_id).append(entryHtml);

        var drug_header = $('#' + newName + '-hdr-drugs-'+type);
        var drug_section = $('#' + newName + '-sec-drugs-'+type);
        var drug_box_plot_id = newName + '-box-plot-'+type;

        // get limits
        var lims = getLimits(entry.name, type); //0: lower, 1: upper
        var drug_actual_val = entry.actual_vals;
        var drug_qc_names = entry.qc_names;
        var drug_report_date = Array(drug_actual_val.length).fill(entry.date);
        var drug_status = entry.statuses;

        var dummyL = {
            x: [null],
            y: [null],
            name: 'QC Lower Limit',
            showlegend: true,
            mode: 'line',
            type: 'scatter',
            marker: {
                color: 'rgb(255, 0, 0)',
                size: 0,
            },
        }

        var dummyM = {
            x: [null],
            y: [null],
            name: 'QC Mean',
            showlegend: true,
            mode: 'line',
            type: 'scatter',
            marker: {
                color: 'rgb(0, 0, 0)',
                size: 0,
            },
        }

        var dummyH = {
            x: [null],
            y: [null],
            name: 'QC Upper Limit',
            showlegend: true,
            mode: 'line',
            type: 'scatter',
            marker: {
                color: 'rgb(0, 255, 0)',
                size: 0,
            },
        }

        var textBoxText = [];

        for(var i = 0; i < drug_actual_val.length; i++){
            textBoxText.push("Name: "+drug_qc_names[i]+"<br>Status: "+drug_status[i]+"<br>DAU Value: "+ drug_actual_val[i]+'<br>'+entry.filename);
        }

        var drug_calculation0 = {
            x: drug_report_date,
            y: drug_actual_val,
            mode: 'markers',
            type: 'scatter',
            marker: {
                color: 'rgb(26, 72, 170)',
                size: 10,
            },
            text: textBoxText,
            showlegend: false,
        }

        var layout = {
            hovermode: 'closest',
            title: {
                text:'QC Limits',
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
                    text: 'Limits',
                }
            },
            shapes: [
            {
                type: 'line',
                xref: 'paper',
                x0: 0,
                y0: lims[1],
                x1: 1,
                y1: lims[1],
                line:{
                    color: 'rgb(0, 255, 0)',
                    width: 2,
                    dash:'dashdot'
                },
            },
            {
                type: 'line',
                xref: 'paper',
                x0: 0,
                y0: lims[0],
                x1: 1,
                y1: lims[0],
                line:{
                    color: 'rgb(255, 0, 0)',
                    width: 2,
                    dash:'dashdot'
                },
            },
            {
                type: 'line',
                xref: 'paper',
                x0: 0,
                y0: (lims[1] + lims[0]) / 2,
                x1: 1,
                y1: (lims[1] + lims[0]) / 2,
                line:{
                    color: 'rgb(0, 0, 0)',
                    width: 2,
                },
            }
            ],   
        };
        
        drug_header.css('background-color', color_blue);
    
        Plotly.newPlot(drug_box_plot_id, [drug_calculation0, dummyH, dummyM,dummyL], layout);
        drug_section.on('shown.bs.collapse', function()  {
            Plotly.Plots.resize(drug_box_plot_id);
        });
        $(window).on('resize', function() {
            Plotly.Plots.resize(drug_box_plot_id);
        });

    } else {
        var drug_box_plot_id = newName + '-box-plot-'+type;
        var drug_actual_val = entry.actual_vals;
        var drug_qc_names = entry.qc_names;
        var drug_report_date = Array(drug_actual_val.length).fill(entry.date);
        var drug_status = entry.statuses;

        var textBoxText =[]; 
        for(var i = 0; i < drug_actual_val.length; i++){
            textBoxText.push("Name: "+drug_qc_names[i]+"<br>Status: "+drug_status[i]+"<br>DAU Value: "+ drug_actual_val[i]+'<br>'+entry.filename);
        }

        var update0 = {
            x: drug_report_date,
            y: drug_actual_val,
            mode: 'markers',
            type: 'scatter',
            marker: {
                color: 'rgb(26, 72, 170)',
                size: 10,
            },
            text: textBoxText,
            showlegend: false,
        };

        Plotly.addTraces(drug_box_plot_id, [update0]);
    }
    return newName + '-box-plot-'+type;
}

function getLimits(drug, type){
    var lower = -1;
    var upper = -1;
    $.ajax({
        type: "POST",
        url: "/drugs/limits", 
        async: false,
        data: {
            'name': drug,
        },
        success: function(result){
            if (type.toLowerCase() == "low") {
                lower = parseFloat(result.data.dau_l_mean) - (2*parseFloat(result.data.dau_l_sd));
                upper = parseFloat(result.data.dau_l_mean) + (2*parseFloat(result.data.dau_l_sd));
            } else if (type.toLowerCase() == "medium"){
                lower = parseFloat(result.data.dau_m_mean) - (2*parseFloat(result.data.dau_m_sd));
                upper = parseFloat(result.data.dau_m_mean) + (2*parseFloat(result.data.dau_m_sd));
            } else if (type.toLowerCase() == "high"){
                lower = parseFloat(result.data.dau_h_mean) - (2*parseFloat(result.data.dau_h_sd));
                upper = parseFloat(result.data.dau_h_mean) + (2*parseFloat(result.data.dau_h_sd));
            }
        }
    });
    return [lower, upper];
}