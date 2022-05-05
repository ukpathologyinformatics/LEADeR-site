var color_ok = "#28a745";
var color_warning = "#ffc107";
var color_error = "#fd6060";
var handledExceptions;

/**
 * Adds a formatted block for the component entry appended into the container element with the provided container_id
 *
 * @param {Object} entry            - The component structured data
 * @param {string} container_id     - The selector ID for the element in which to insert the generated HTML
 * @param {Object} handledExceptions- Contains notes, exceptionUUIDs, personIDs, and timestamp of already submitted notes
 * @returns {string} text           - UUID4 used to make fields unique in the components HTML element ids
 */
function addComponent(entry, container_id, handledEx) {
    handledExceptions = handledEx;
    var entryId = uuid4();
    if (entryId.match(/^\d/)) {
        entryId = "x" + entryId;
    }
    var entryHtml = "";
    entryHtml += '<div class="col-lg-12 px-0 mb-2">';
    entryHtml += '  <div class="card border-dark">';
    entryHtml += '      <h5 class="card-header">';
    entryHtml += '          <div class="row">';
    entryHtml += '              <div class="col-sm-4"><span class="float-sm-right float-left">Report Generated Date:</span></div>';
    entryHtml += '              <div class="col-sm-8"><span class="float-sm-left float-right">' + moment(entry.header.timestamp).format('MMMM Do YYYY, h:mm:ss A') + '</span></div>';
    entryHtml += '          </div>';
    entryHtml += '          <div class="row">';
    entryHtml += '              <div class="col-sm-4"><span class="float-sm-right float-left">Assay:</span></div>';
    entryHtml += '              <div class="col-sm-8"><span class="float-sm-left float-right">' + entry.header.assay + '</span></div>';
    entryHtml += '          </div>';
    entryHtml += '          <div class="row">';
    entryHtml += '              <div class="col-sm-4"><span class="float-sm-right float-left">Component:</span></div>';
    entryHtml += '              <div class="col-sm-8"><span class="float-sm-left float-right component-name" style="position:relative">' + entry.header.component.replace(" 1", "") + '</span></div>';
    entryHtml += '          </div>';
    entryHtml += '      </h5>';
    entryHtml += '      <div class="card-body">';
    entryHtml += '          <div class="card mb-2" id="card-blank">';
    entryHtml += '              <h5 class="card-header" id="' + entryId + '-hdr-blank">';
    entryHtml += '                  <a class="collapsed d-block" data-toggle="collapse" href="#' + entryId + '-sec-blank" aria-expanded="false" aria-controls="' + entryId + '-sec-blank">Blank</a>';
    entryHtml += '              </h5>';
    entryHtml += '              <div class="card-body collapse" id="' + entryId + '-sec-blank" data-exception="' + entry.blank.Exception_UUID +'">';
    entryHtml += '                  <div class="row">';
    entryHtml += '                      <div class="col-lg-3"><span class=" float-right">Status:</span></div>';
    entryHtml += '                      <div class="col-lg-9">' + entry.blank.blank_peak_area_status + '</div>';
    entryHtml += '                  </div>';
    entryHtml += '                  <div class="row">';
    entryHtml += '                      <div class="col-lg-3"><span class=" float-right">Lowest Concentration:</span></div>';
    entryHtml += '                      <div class="col-lg-9">' + entry.blank.blank_lowest_concentration + '</div>';
    entryHtml += '                  </div>';
    entryHtml += '                  <div class="row">';
    entryHtml += '                      <div class="col-lg-3"><span class=" float-right">Lowest Concentration Area:</span></div>';
    entryHtml += '                      <div class="col-lg-9">' + entry.blank.blank_lowest_concentration_area + '</div>';
    entryHtml += '                  </div>';
    entryHtml += '              </div>';
    entryHtml += '          </div>';
    entryHtml += '          <div class="card mb-2" id="card-blank">';
    entryHtml += '              <h5 class="card-header" id="' + entryId + '-hdr-nes">';
    entryHtml += '                  <a class="collapsed d-block" data-toggle="collapse" href="#' + entryId + '-sec-nes" aria-expanded="false" aria-controls="' + entryId + '-sec-nes">NES</a>';
    entryHtml += '              </h5>';
    entryHtml += '              <div class="card-body collapse" id="' + entryId + '-sec-nes" data-exception="' + entry.nes.Exception_UUID +'">';
    entryHtml += '                  <div class="row">';
    entryHtml += '                      <div class="col-lg-3"><span class="float-right">Status:</span></div>';
    entryHtml += '                      <div class="col-lg-9">' + entry.nes.nes_status + '</div>';
    entryHtml += '                  </div>';
    entryHtml += '                  <div class="row">';
    entryHtml += '                      <div class="col-lg-3"><span class="float-right">Lower Limit:</span></div>';
    entryHtml += '                      <div class="col-lg-9">' + entry.nes.nes_lowerlimit + '</div>';
    entryHtml += '                  </div>';
    entryHtml += '                  <div class="row" id="' + entryId + '-nes-items"></div>';
    entryHtml += '              </div>';
    entryHtml += '          </div>';
    entryHtml += '          <div class="card mb-2" id="card-blank">';
    entryHtml += '              <h5 class="card-header" id="' + entryId + '-hdr-nes-is">';
    entryHtml += '                  <a class="collapsed d-block" data-toggle="collapse" href="#' + entryId + '-sec-nes-is" aria-expanded="false" aria-controls="' + entryId + '-sec-nes-is">NES IS</a>';
    entryHtml += '              </h5>';
    entryHtml += '              <div class="card-body collapse" id="' + entryId + '-sec-nes-is">';
    entryHtml += '                  <div class="row">';
    entryHtml += '                      <div class="col-lg-3"><span class="float-right">Status:</span></div>';
    entryHtml += '                      <div class="col-lg-9">' + entry.nes.nes_is_status + '</div>';
    entryHtml += '                  </div>';
    entryHtml += '                  <div class="row">';
    entryHtml += '                      <div class="col-lg-3"><span class="float-right">Lower Limit:</span></div>';
    entryHtml += '                      <div class="col-lg-9">' + entry.nes.nes_is_lowerlimit + '</div>';
    entryHtml += '                  </div>';
    entryHtml += '                  <div class="row" id="' + entryId + '-nes-is-items"></div>';
    entryHtml += '              </div>';
    entryHtml += '          </div>';
    entryHtml += '          <div class="card mb-2" id="card-blank">';
    entryHtml += '              <h5 class="card-header" id="' + entryId + '-hdr-calibrations">';
    entryHtml += '                  <a class="collapsed d-block" data-toggle="collapse" href="#' + entryId + '-sec-calibrations" aria-expanded="false" aria-controls="' + entryId + '-sec-calibrations">Calibrations</a>';
    entryHtml += '              </h5>';
    entryHtml += '              <div class="card-body collapse" id="' + entryId + '-sec-calibrations">';
    entryHtml += '                  <div class="row text-center">';
    entryHtml += '                      <div class="col-sm-3"><u>Actual Concentration</u></div>';
    entryHtml += '                      <div class="col-sm-3"><u>Accuracy</u></div>';
    entryHtml += '                      <div class="col-sm-2"><u>Used</u></div>';
    entryHtml += '                      <div class="col-sm-2"><u>Out of Range</u></div>';
    entryHtml += '                      <div class="col-sm-2"></div>';
    entryHtml += '                  </div>';
    entryHtml += '                  <div id="' + entryId + '-calibrations"></div>';
    entryHtml += '                  <div class="row">';
    entryHtml += '                      <div class="col-sm-3"></div>';
    entryHtml += '                      <div class="col-sm-2"><u>Actual</u></div>';
    entryHtml += '                      <div class="col-sm-2"><u>Lower Bound</u></div>';
    entryHtml += '                      <div class="col-sm-2"><u>Upper Bound</u></div>';
    entryHtml += '                      <div class="col-sm-2"></div>';
    entryHtml += '                  </div>';
    entryHtml += '                  <div class="' + entryId + '-slopes row" ></div>';
    entryHtml += '                  <div class="' + entryId + '-mean-slopes row">';
    entryHtml += '                      <div class="col-sm-3"><span class="float-right">Mean Slope:</span></div>';
    entryHtml += '                      <div class="col-sm-9">' + entry.calibrations.calibration_mean_slope + '</div>';
    entryHtml += '                  </div>';
    entryHtml += '                  <div class="row">';
    entryHtml += '                      <div class="col-sm-3"><span class="float-right">R<sup>2</sup>:</span></div>';
    entryHtml += '                      <div class="col-sm-9">' + Math.floor(entry.calibrations.r_2*100000)/100000 + '</div>';
    entryHtml += '                  </div>';
    entryHtml += '              </div>';
    entryHtml += '          </div>';
    entryHtml += '          <div class="card mb-2" id="card-blank">';
    entryHtml += '              <h5 class="card-header" id="' + entryId + '-hdr-qc">';
    entryHtml += '                  <a class="collapsed d-block" data-toggle="collapse" href="#' + entryId + '-sec-qc" aria-expanded="false" aria-controls="' + entryId + '-sec-qc">QC</a>';
    entryHtml += '              </h5>';
    entryHtml += '              <div class="card-body collapse" id="' + entryId + '-sec-qc">';
    entryHtml += '                  <div class="row text-center">';
    entryHtml += '                      <div class="col-sm-3"><u>Name</u></div>';
    entryHtml += '                      <div class="col-sm-3"><u>Value</u></div>';
    entryHtml += '                      <div class="col-sm-3"><u>State</u></div>';
    entryHtml += '                      <div class="col-sm-3"></div>';
    entryHtml += '                  </div>';
    entryHtml += '                  <div id="' + entryId + '-qcs"></div>';
    entryHtml += '              </div>';
    entryHtml += '          </div>';
    entryHtml += '          <div class="card mb-2" id="card-blank">';
    entryHtml += '              <h5 class="card-header" id="' + entryId + '-hdr-outliers">';
    entryHtml += '                  <a class="collapsed d-block" data-toggle="collapse" href="#' + entryId + '-sec-outliers" aria-expanded="false" aria-controls="' + entryId + '-sec-outliers">Outliers</a>';
    entryHtml += '              </h5>';
    entryHtml += '              <div class="card-body collapse" id="' + entryId + '-sec-outliers">';
    entryHtml += '                  <div id="' + entryId + '-box-plot"></div>';
    entryHtml += '              </div>';
    entryHtml += '          </div>';
    entryHtml += '      </div>';
    entryHtml += '  </div>';
    $(container_id).append(entryHtml);

    var blank_header = $('#' + entryId + '-hdr-blank');
    var blank_section = $('#' + entryId + '-sec-blank');
    var nes_header = $('#' + entryId + '-hdr-nes');
    var nes_section = $('#' + entryId + '-sec-nes');
    var nes_items = $('#' + entryId + '-nes-items');
    var nes_is_header = $('#' + entryId + '-hdr-nes-is');
    var nes_is_section = $('#' + entryId + '-sec-nes-is');
    var nes_is_items = $('#' + entryId + '-nes-is-items');
    var calibration_header = $('#' + entryId + '-hdr-calibrations');
    var calibration_section = $('#' + entryId + '-sec-calibrations');
    var calibration_items = $('#' + entryId + '-calibrations');
    var qc_header = $('#' + entryId + '-hdr-qc');
    var qc_section = $('#' + entryId + '-sec-qc');
    var qc_items = $('#' + entryId + '-qcs');
    var outliers_header = $('#' + entryId + '-hdr-outliers');
    var outliers_section = $('#' + entryId + '-sec-outliers');
    var outliers_box_plot_id = entryId + '-box-plot';

    if (entry.blank.blank_peak_area_status === "OK") {
        blank_header.css('background-color', color_ok);
    } else if (entry.blank.blank_peak_area_status === "WARNING") {
        blank_header.css('background-color', color_warning);
        blank_section.removeClass('collapse');
        blank_section.collapse('show');
    } else if (entry.blank.blank_peak_area_status === "ERROR") {
        blank_header.css('background-color', color_error);
        blank_section.removeClass('collapse');
        blank_section.collapse('show');
    }
    var nes_items_html = "";
    $.each(entry.nes.nes_items, function(nes_item_i, nes_item) {
        nes_items_html += "<div class='col-lg-3'><span class='float-right'>NES Peak Area:</span></div><div class='col-lg-9'>" + nes_item.nes_peak_area + "</div>";
    });
    nes_items.html(nes_items_html);
    if (entry.nes.nes_status === "OK") {
        nes_header.css('background-color', color_ok);
    } else if (entry.nes.nes_status === "WARNING") {
        nes_header.css('background-color', color_warning);
        nes_section.removeClass('collapse');
        nes_section.collapse('show');
    } else if (entry.nes.nes_status === "ERROR") {
        nes_header.css('background-color', color_error);
        blank_section.removeClass('collapse');
        nes_section.collapse('show');
    }
    var nes_is_items_html = "";
    $.each(entry.nes.nes_is_items, function(nes_is_item_i, nes_is_item) {
        $('#' + entryId + '-sec-nes-is').data("exception", nes_is_item.Exception_UUID);
        nes_is_items_html += "<div class='col-lg-3'><span class='float-right'>NES Peak Area IS:</span></div><div class='col-lg-9'>" + nes_is_item.nes_peak_area_is + "</div>";
    });
    nes_is_items.html(nes_is_items_html);
    if (entry.nes.nes_is_status === "OK") {
        nes_is_header.css('background-color', color_ok);
    } else if (entry.nes.nes_is_status === "WARNING") {
        nes_is_header.css('background-color', color_warning);
        nes_is_section.removeClass('collapse');
        nes_is_section.collapse('show');
    } else if (entry.nes.nes_is_status === "ERROR") {
        nes_is_header.css('background-color', color_error);
        blank_section.removeClass('collapse');
        nes_is_section.collapse('show');
    } 
    var calibration_items_html = "";
    var calibration_has_warning = false;
    $.each(entry.calibrations.calibration_items, function(calib_i, calibration) {
        calibration_items_html += "<div class='row text-center "
        if (calibration.out_of_range && calibration.used) {
            if (handledExceptions[0][0].indexOf(calibration.Exception_UUID) == -1) {
                calibration_items_html += "bg-warning ukhc-todo-item";
                calibration_has_warning = true;
            } else {
                calibration_items_html += "bg-warning";
                calibration_has_warning = true;
            }
        } else {
            calibration_items_html += "bg-success";
        }
        calibration_items_html += "' data-exception='" + calibration.Exception_UUID + "' style='position:relative'>";
        calibration_items_html += "<div class='col-sm-3'>" + calibration.concentration + "</div>";
        calibration_items_html += "<div class='col-sm-3'>" + calibration.accuracy.toFixed(5) + " %</div>";
        calibration_items_html += "<div class='col-sm-2 text-capitalize'>" + calibration.used + "</div>";
        calibration_items_html += "<div class='col-sm-2 text-capitalize'>" + calibration.out_of_range + "</div>";
        calibration_items_html += "<div class='col-sm-2'>"
        if (calibration.out_of_range && calibration.used) {
            var index = handledExceptions[0][0].indexOf(calibration.Exception_UUID);
            if(index != -1){
                calibration_items_html += "<a class='btn btn-xs my-1 btn-secondary' onclick='reviewItem(this, \"" + calibration.Exception_UUID + "\",);'><span class='text-white'><i class='fas fa-edit'></i> Update</span></a>";
            } else {
                calibration_items_html += "<a class='btn btn-xs my-1 btn-danger' onclick='reviewItem(this, \"" + calibration.Exception_UUID + "\");'><span class='text-white'><i class='fas fa-exclamation-triangle'></i> Check</span></a>";
            }
        }
        calibration_items_html += "</div>";
        calibration_items_html += "</div>";
    });
    calibration_items.html(calibration_items_html);

    // weighted slopes
    if (entry.calibrations.weighted_slope < entry.calibrations.slope_lower || entry.calibrations.weighted_slope > entry.calibrations.slope_upper) {
        $('.'+entryId+'-slopes').addClass('bg-warning ukhc-todo-item');
        $('.'+entryId+'-slopes').attr('data-exception', entry.calibrations.slope_exception);
        $('.'+entryId+'-slopes').append(
            '<div class="col-md-3"><span class="float-right">Weighted Slope:</span></div> \
            <div class="col-md-2">'+entry.calibrations.weighted_slope+'</div> \
            <div class="col-md-2">'+entry.calibrations.slope_lower+'</div> \
            <div class="col-md-2">'+entry.calibrations.slope_upper+'</div>');
        var index = handledExceptions[0][0].indexOf(entry.calibrations.slope_exception);
        if(index != -1){
            $('.'+entryId+'-slopes').append('<div class="col-md-3"><a class="btn btn-sm my-1 btn-secondary" onclick="reviewItem(this, \'' + entry.calibrations.slope_exception + '\');"><span class="text-white"><i class="fas fa-edit"></i> Update</span></a></div>');
        } else {
            $('.'+entryId+'-slopes').append('<div class="col-md-3"><a class="btn btn-sm my-1 btn-danger" onclick="reviewItem(this, \'' + entry.calibrations.slope_exception + '\');"><span class="text-white"><i class="fas fa-exclamation-triangle"></i> Check</span></a></div>');
        }
        calibration_has_warning = true;
    } else {
        $('.'+entryId+'-slopes').append(
            '<div class="col-md-3"><span class="float-right">Weighted Slope:</span></div> \
            <div class="col-md-2">'+entry.calibrations.weighted_slope+'</div> \
            <div class="col-md-2">'+entry.calibrations.slope_lower+'</div> \
            <div class="col-md-2">'+entry.calibrations.slope_upper+'</div> \
            <div class="col-md-3"></div>'
        );
    }
    
    //mean slopes
    // if (entry.calibrations.calibration_mean_slope < entry.calibrations.slope_lower || entry.calibrations.calibration_mean_slope > entry.calibrations.slope_upper) {
    //     $('.'+entryId+'-mean-slopes').addClass('bg-warning ukhc-todo-item');
    //     $('.'+entryId+'-mean-slopes').attr('data-exception', entry.calibrations.slope_mean_exception);
    //     $('.'+entryId+'-mean-slopes').append(
    //         '<div class="col-sm-3"><span class="float-right">Mean Slope:</span></div> \
    //         <div class="col-sm-2">' + entry.calibrations.calibration_mean_slope + '</div> \
    //         <div class="col-md-2">' + entry.calibrations.slope_lower+'</div> \
    //         <div class="col-md-2">' + entry.calibrations.slope_upper+'</div>'
    //     );
    //     var index = handledExceptions[0][0].indexOf(entry.calibrations.slope_mean_exception);
    //     if(index != -1){
    //         $('.'+entryId+'-mean-slopes').append('<div class="col-md-3"><a class="btn btn-sm my-1 btn-secondary" onclick="reviewItem(this, \'' + entry.calibrations.slope_mean_exception + '\');"><span class="text-white"><i class="fas fa-edit"></i> Update</span></a></div>');
    //     } else {
    //         $('.'+entryId+'-mean-slopes').append('<div class="col-md-3"><a class="btn btn-sm my-1 btn-danger" onclick="reviewItem(this, \'' + entry.calibrations.slope_mean_exception + '\');"><span class="text-white"><i class="fas fa-exclamation-triangle"></i> Check</span></a></div>');
    //     }
    //     calibration_has_warning = true;
    // } else {
    //     $('.'+entryId+'-mean-slopes').append(
    //         '<div class="col-sm-3"><span class="float-right">Mean Slope:</span></div> \
    //         <div class="col-sm-2">' + entry.calibrations.calibration_mean_slope + '</div> \
    //         <div class="col-md-2">' + entry.calibrations.slope_lower+'</div> \
    //         <div class="col-md-2">' + entry.calibrations.slope_upper+'</div>'
    //     );
    // }

    if (!calibration_has_warning) {
        calibration_header.css('background-color', color_ok);
    } else {
        calibration_header.css('background-color', color_warning);
        calibration_section.removeClass('collapse');
        calibration_section.collapse('show');
    }

    var qc_items_html = "";
    var qc_has_warning = false;
    $.each(entry.qc, function(qc_i, qc_item) {
        qc_items_html += "<div class='row text-center "
        var qc_item_status;
        if (qc_item.qc_calculated_concentration == "-1"){
            if (handledExceptions[0][0].indexOf(qc_item.Exception_UUID) == -1) {
                qc_items_html += "bg-warning ukhc-todo-item";
                qc_has_warning = true;
                qc_item_status = "N/a";
            } else {
                qc_items_html += "bg-warning";
                qc_has_warning = true;
                qc_item_status = "N/a";
            }
        } else if (qc_item.qc_calculated_concentration > qc_item.qc_dauh_cutoff) {
            if (handledExceptions[0][0].indexOf(qc_item.Exception_UUID) == -1) {
                qc_items_html += "bg-warning ukhc-todo-item";
                qc_has_warning = true;
                qc_item_status = "HIGH WARNING (" + qc_item.qc_calculated_concentration.toFixed(5) + " > " + qc_item.qc_dauh_cutoff + ")";
            } else {
                qc_items_html += "bg-warning";
                qc_has_warning = true;
                qc_item_status = "HIGH WARNING (" + qc_item.qc_calculated_concentration.toFixed(5) + " > " + qc_item.qc_dauh_cutoff + ")";
            }
        } else if (qc_item.qc_calculated_concentration < qc_item.qc_daul_cutoff) {
            if (handledExceptions[0][0].indexOf(qc_item.Exception_UUID) == -1) {
                qc_items_html += "bg-warning ukhc-todo-item";
                qc_has_warning = true;
                qc_item_status = "LOW WARNING (" + qc_item.qc_calculated_concentration.toFixed(5) + " < " + qc_item.qc_daul_cutoff + ")";
            } else {
                qc_items_html += "bg-warning";
                qc_has_warning = true;
                qc_item_status = "LOW WARNING (" + qc_item.qc_calculated_concentration.toFixed(5) + " < " + qc_item.qc_daul_cutoff + ")";
            }
        } else {
            qc_items_html += "bg-success";
            qc_item_status = "OK";
        }
        qc_items_html += "' data-exception='" + qc_item.Exception_UUID + "'>";
        qc_items_html += "<div class='col-sm-3'>" + qc_item.qc_name + "</div>";
        if (qc_item.qc_calculated_concentration == "-1"){
            qc_items_html += "<div class='col-sm-3'>N/a</div>";
        } else {
            qc_items_html += "<div class='col-sm-3'>" + qc_item.qc_calculated_concentration.toFixed(5) + "</div>";
        }
        qc_items_html += "<div class='col-sm-3'>" + qc_item_status + "</div>";
        qc_items_html += "<div class='col-sm-3'>";
        if ((qc_item.qc_calculated_concentration > qc_item.qc_dauh_cutoff) || (qc_item.qc_calculated_concentration < qc_item.qc_daul_cutoff)) {
            var index = handledExceptions[0][0].indexOf(qc_item.Exception_UUID);
            if(index != -1){
                qc_items_html += "<a class='btn btn-sm my-1 btn-secondary' onclick='reviewItem(this, \"" + qc_item.Exception_UUID + "\");'><span class='text-white'><i class='fas fa-edit'></i> Update</span></a>";
            } else {
                qc_items_html += "<a class='btn btn-sm my-1 btn-danger' onclick='reviewItem(this, \"" + qc_item.Exception_UUID + "\");'><span class='text-white'><i class='fas fa-exclamation-triangle'></i> Check</span></a>";
            }
        }
        qc_items_html += "</div>";
        qc_items_html += "</div>";
    });

    qc_items.html(qc_items_html);

    if (!qc_has_warning) {
        qc_header.css('background-color', color_ok);
    } else {
        qc_header.css('background-color', color_warning);
        qc_section.removeClass('collapse');
        qc_section.collapse('show');
    }

    var outlier_min = entry.outliers.min_whisker;
    var outlier_q1 = entry.outliers.Q1;
    var outlier_median = entry.outliers.median;
    var outlier_q3 = entry.outliers.Q3;
    var outlier_max = entry.outliers.max_whisker;
    var outlier_box_plot_data = [outlier_min, outlier_q1, outlier_median, outlier_median, outlier_q3, outlier_max]
    var outlier_calculations = {
        x: outlier_box_plot_data,
        type: 'box',
        name: '',
        showlegend: false,
    }
    var outlier_scatter_data_y = [];
    var outlier_scatter_data_x = [];
    var outlier_scatter_data_names = [];
    $.each(entry.outliers.outlier_items, function(outlier_i, outlier_v) {
        outlier_scatter_data_x.push(outlier_v.value);
        outlier_scatter_data_y.push("");
        outlier_scatter_data_names.push("ID: " + outlier_v.patient_id + "<br>Name: " + outlier_v.patient_name + "<br>Cal Conc: " + outlier_v.calc_conc);
    });
    var outliers = {
        x: outlier_scatter_data_x,
        y: outlier_scatter_data_y,
        text: outlier_scatter_data_names,
        name: 'Outliers',
        mode: 'markers',
        type: 'scatter',
        marker: {
            color: color_warning
        }
    }
    if (outlier_scatter_data_x.length > 0) {
        outliers_header.css('background-color', color_warning);
        outliers_section.removeClass('collapse');
        outliers_section.collapse('show');
    } else {
        outliers_header.css('background-color', color_ok);
    }
    var outlier_plot_layout = {
        title: 'IS PEAK AREA',
        hovermode: 'closest'
    }
    Plotly.newPlot(outliers_box_plot_id, [outlier_calculations, outliers], outlier_plot_layout);
    outliers_section.on('shown.bs.collapse', function()  {
        Plotly.Plots.resize(outliers_box_plot_id);
    });
    $(window).on('resize', function() {
        Plotly.Plots.resize(outliers_box_plot_id);
    });
    return entryId;
}

var itemBeingReviewed;
var reviewItemModal = $('#reviewItemModal');
var reviewItemId = $('#reviewItemId');
var reviewItemFollowUp = $('#reviewItemFollowUp');


reviewItemFollowUp.on('keypress', function(e) {
    if (!!e.shiftKey && e.which === 13) {
        e.preventDefault();
        submitItemReview();
    }
});

reviewItemModal.on('shown.bs.modal', function() {

});

reviewItemModal.on('hide.bs.modal', function() {
    reviewItemId.val('');
    reviewItemFollowUp.val('');
    itemBeingReviewed = null;
});

var isUpdate;

// item_id is the exception id
function reviewItem(source, item_id) {
    isUpdate = source.classList.contains('btn-secondary')
    var index = handledExceptions[0][0].indexOf(item_id);
    reviewItemId.val(item_id);
    itemBeingReviewed = source;
    $('#reviewItemModal .modal-content small').remove();
    if (index != -1) {
        $('#reviewItemModal .modal-content').append('<small style="text-align:right">Last Updated: ' + handledExceptions[0][2][index] + ' by ' + handledExceptions[0][3][index] + '&nbsp;</small>');
        reviewItemFollowUp.val(handledExceptions[0][1][index]);
    }
    $("#reviewItemModal .btn-primary").attr("onclick","submitItemReview(" + index + ");");
    reviewItemModal.modal('show');
}

function submitItemReview(index = -1) {
    if (reviewItemId.val() === null || reviewItemId.val() === '') {
        showError('The form is missing the internal review item identifier. Please notify the developer.');
        return;
    }
    if (reviewItemFollowUp.val() === null || reviewItemFollowUp.val() === '') {
        showError('You must supply your item follow-up for documentation.');
        return;
    }

    var userEntry = reviewItemFollowUp.val();
    var exceptionID = reviewItemId.val();
    var formData = {
        'item_id': exceptionID,
        'follow_up': userEntry,
        'isUpdate': isUpdate,
    };
    $.post({
        url: '/reports/item/follow-up/submit',
        data: formData,
        dataType: 'json'
    }).done(function(data) {
        if (data.success) {
            showSuccess(data.message);
            var todo_id = $(itemBeingReviewed).parent().parent().attr('id');
            /*$('[data-sn-section="' + parent_id + '"]').css('display', 'none');
            $(source).css('display', 'none');*/
            $('[data-sn-section="' + todo_id + '"]').remove();
            //$(itemBeingReviewed).remove();
            //change Check button to update button
            $(itemBeingReviewed).removeClass("btn-danger");
            $(itemBeingReviewed).addClass("btn-secondary");
            $(itemBeingReviewed).contents().html('<i class="fas fa-edit"></i> Update');
            reviewItemModal.modal('hide');
            if (index == -1) {
                handledExceptions[0][0].push(exceptionID);
                handledExceptions[0][1].push(userEntry);
                handledExceptions[0][2].push(data.timestamp);
                handledExceptions[0][3].push(data.linkblue);
            }
            handledExceptions[0][1][index] = userEntry;
            handledExceptions[0][2][index] = data.timestamp;
            handledExceptions[0][3][index] = data.linkblue;
            //location.reload(); // TODO change this so no reload is needed
        } else {
            showError(data.message);
        }
    });

}