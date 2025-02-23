/**
 * __________________________________________________________________
 *
 * Phillipine Address Selector
 * __________________________________________________________________
 *
 * MIT License
 * 
 * Copyright (c) 2020 Wilfred V. Pine
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package Phillipine Address Selector
 * @author Wilfred V. Pine <only.master.red@gmail.com>
 * @copyright Copyright 2020 (https://dev.confired.com)
 * @link https://github.com/redmalmon/philippine-address-selector
 * @license https://opensource.org/licenses/MIT MIT License
 */

var my_handlers = {
    // Fill provinces based on selected region
    fill_provinces: function() {
        let group = $(this).data('group'); 
        let region_code = $(this).val();
        $(".region-text[data-group='" + group + "']").val($(this).find("option:selected").text());

        // Clear dependent fields
        $(".province-text[data-group='" + group + "'], .city-text[data-group='" + group + "'], .barangay-text[data-group='" + group + "']").val('');
        $(".province-selector[data-group='" + group + "'], .city-selector[data-group='" + group + "'], .barangay-selector[data-group='" + group + "']").empty().append('<option selected disabled>Choose</option>');

        $.getJSON('js/ph-json/province.json', function(data) {
            let filtered = data.filter(item => item.region_code == region_code);
            filtered.sort((a, b) => a.province_name.localeCompare(b.province_name));

            filtered.forEach(entry => {
                $(".province-selector[data-group='" + group + "']").append(new Option(entry.province_name, entry.province_code));
            });
        });
    },

    // Fill cities based on selected province
    fill_cities: function() {
        let group = $(this).data('group');
        let province_code = $(this).val();
        $(".province-text[data-group='" + group + "']").val($(this).find("option:selected").text());

        $(".city-text[data-group='" + group + "'], .barangay-text[data-group='" + group + "']").val('');
        $(".city-selector[data-group='" + group + "'], .barangay-selector[data-group='" + group + "']").empty().append('<option selected disabled>Choose</option>');

        $.getJSON('js/ph-json/city.json', function(data) {
            let filtered = data.filter(item => item.province_code == province_code);
            filtered.sort((a, b) => a.city_name.localeCompare(b.city_name));

            filtered.forEach(entry => {
                $(".city-selector[data-group='" + group + "']").append(new Option(entry.city_name, entry.city_code));
            });
        });
    },

    // Fill barangays based on selected city
    fill_barangays: function() {
        let group = $(this).data('group');
        let city_code = $(this).val();
        $(".city-text[data-group='" + group + "']").val($(this).find("option:selected").text());

        $(".barangay-text[data-group='" + group + "']").val('');
        $(".barangay-selector[data-group='" + group + "']").empty().append('<option selected disabled>Choose</option>');

        $.getJSON('js/ph-json/barangay.json', function(data) {
            let filtered = data.filter(item => item.city_code == city_code);
            filtered.sort((a, b) => a.brgy_name.localeCompare(b.brgy_name));

            filtered.forEach(entry => {
                $(".barangay-selector[data-group='" + group + "']").append(new Option(entry.brgy_name, entry.brgy_code));
            });
        });
    },

    onchange_barangay: function() {
        let group = $(this).data('group');
        $(".barangay-text[data-group='" + group + "']").val($(this).find("option:selected").text());
    }
};

$(function() {
    // Attach event listeners dynamically for multiple sets
    $(document).on('change', '.region-selector', my_handlers.fill_provinces);
    $(document).on('change', '.province-selector', my_handlers.fill_cities);
    $(document).on('change', '.city-selector', my_handlers.fill_barangays);
    $(document).on('change', '.barangay-selector', my_handlers.onchange_barangay);

    // Load regions for all sets
    $('.region-selector').each(function() {
        let group = $(this).data('group');
        let dropdown = $(this);
        dropdown.append('<option selected="true" disabled>Choose Region</option>');

        $.getJSON('js/ph-json/region.json', function(data) {
            data.forEach(entry => {
                dropdown.append(new Option(entry.region_name, entry.region_code));
            });
        });
    });
});
