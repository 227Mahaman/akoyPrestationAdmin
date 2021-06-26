host = $(location).attr('hostname');
protocol = $(location).attr('protocol');
folder = '';
if (host == 'localhost') {
    folder = '/akoyPrestationAdmin';
}
//host = "localhost:8080"; // TODO retire ça si ce n'est pas mon mac
customUrl = protocol + '//' + host + folder + '/index.php?action=';
myurl = protocol + '//' + host + folder + '/api/object/';
firestoreUrl = 'https://firestore.googleapis.com/v1/projects/test-gdg-406a8/databases/(default)/documents/';
var $_GET = {};
document.location.search.replace(/\??(?:([^=]+)=([^&]*)&?)/g, function () {
    function decode(s) {
        return decodeURIComponent(s.split("+").join(" "));
    }

    $_GET[decode(arguments[1])] = decode(arguments[2]);
});
if ($_GET['uniqueId'] != '') {

    getModel($_GET['uniqueId']);
}

// $('#inputSearch').on('click', function () { 
//     if ($_GET['action'] != 'searchView') {
//         window.location.replace("index.php?action=searchView&data="+$(this).val());
//     }
// });
getPermission();
$('input:checkbox.module_is_checked').each(function (i, v) {
    $mr = getDataWith2Param('module_role', 'module', $(v).val(), 'role_id', $_GET['role']);

    $mr.done(function ($mr) {
        if (!$mr.error) {
            $(v).attr('checked', true);
        }
    });

    $mr.fail(function ($mr) {
        $(v).attr('checked', false);

    });
});




function addPermissionRole(chec, role) {
    $data = "role_id=" + role + "&module=" + $(chec).val();
    //$data = JSON.stringify($($data).serializeObject());
    $mr = getDataWith2Param('module_role', 'module', $(chec).val(), 'role_id', role);
    console.log($data, $mr, "ci");
    if ($(chec).prop('checked') == true) {
        $mr.done(function ($mr) {
            if ($mr.error) {
                console.log($mr, $mr.error);
                $.ajax({
                    url: myurl + "module_role",
                    type: "POST",
                    contentType: 'application/x-www-form-urlencoded',
                    dataType: "json",
                    data: $data,
                    success: function (result) {
                        console.log(result);
                    },
                    error: function (xhr, resp, text) {
                        // show error to console
                        console.log(xhr, resp, text);
                    }
                });
            }
        });

        $mr.fail(function ($mr) {
            console.log($mr, $mr.error);
            $.ajax({
                url: myurl + "module_role",
                type: "POST",
                contentType: 'application/x-www-form-urlencoded',
                dataType: "json",
                data: $data,
                success: function (result) {
                    console.log(result);
                },
                error: function (xhr, resp, text) {
                    // show error to console
                    console.log(xhr, resp, text);
                }
            });
        });
    } else {
        deleteDataWith2Param('module_role', 'module', $(chec).val(), 'role_id', $_GET['role']);
    }
}

function addGroupeProgram(chec, program) {
    $data = "id_program=" + program + "&id_groupe=" + $(chec).val();
    $mr = getDataWith2Param('programmation_has_groupe_pharm', 'id_groupe', $(chec).val(), 'id_program', program);
    console.log($data, $mr, "addGroupeProgram");
    if ($(chec).prop('checked') == true) {
        $mr.done(function ($mr) {
            if ($mr.error) {
                console.log($mr, $mr.error);
                $.ajax({
                    url: myurl + "programmation_has_groupe_pharm",
                    type: "POST",
                    contentType: 'application/x-www-form-urlencoded',
                    dataType: "json",
                    data: $data,
                    success: function (result) {
                        console.log(result);
                    },
                    error: function (xhr, resp, text) {
                        // show error to console
                        console.log(xhr, resp, text);
                    }
                });
            }
        });

        $mr.fail(function ($mr) {
            console.log($mr, $mr.error);
            $.ajax({
                url: myurl + "programmation_has_groupe_pharm",
                type: "POST",
                contentType: 'application/x-www-form-urlencoded',
                dataType: "json",
                data: $data,
                success: function (result) {
                    console.log(result);
                },
                error: function (xhr, resp, text) {
                    // show error to console
                    console.log(xhr, resp, text);
                }
            });
        });
    } else {
        deleteDataWith2Param('programmation_has_groupe_pharm', 'id_groupe', $(chec).val(), 'id_program', $_GET['id']);
    }
}

function addPharmaGroupe(chec, groupe) {
    $data = "groupe_pharmacie=" + groupe + "&pharmacie=" + $(chec).val();
    $mr = getDataWith2Param('groupe_pharma_has_pharma', 'pharmacie', $(chec).val(), 'groupe_pharmacie', groupe);
    console.log($data, $mr, "addPharmaGroupe");
    if ($(chec).prop('checked') == true) {
        $mr.done(function ($mr) {
            if ($mr.error) {
                console.log($mr, $mr.error);
                $.ajax({
                    url: myurl + "groupe_pharma_has_pharma",
                    type: "POST",
                    contentType: 'application/x-www-form-urlencoded',
                    dataType: "json",
                    data: $data,
                    success: function (result) {
                        console.log(result);
                    },
                    error: function (xhr, resp, text) {
                        // show error to console
                        console.log(xhr, resp, text);
                    }
                });
            }
        });

        $mr.fail(function ($mr) {
            console.log($mr, $mr.error);
            $.ajax({
                url: myurl + "groupe_pharma_has_pharma",
                type: "POST",
                contentType: 'application/x-www-form-urlencoded',
                dataType: "json",
                data: $data,
                success: function (result) {
                    console.log(result);
                },
                error: function (xhr, resp, text) {
                    // show error to console
                    console.log(xhr, resp, text);
                }
            });
        });
    } else {
        deleteDataWith2Param('groupe_pharma_has_pharma', 'pharmacie', $(chec).val(), 'groupe_pharmacie', $_GET['id']);
    }
}
// filtrage de l'exercice par ville
$("#bureau").on('select2:selecting', function (e) {
    showPleaseWait();
    val = $(this).val();
    $exercice = getDatas("exercice", "bureau", val);

    $exercice.done(function (data) {
        console.log(data, "exercice");
        data = data.data;
        html = "";
        $.each(data, function (i, v) {
            html += '<option value="' + v.id_exercice + '">' + v.libelle + '</option>';
        });
        $("#exercice").html(html);
        hidePleaseWait();
    });

    $exercice.fail(function ($err) {
        console.log($err, "exercice err");
        html = '<option value="">Ce bureau n\' pas d\'exercice</option>';
        $("#exercice").html(html);
        hidePleaseWait();
    });

});

function getModuleRole() {

}

function getPermission(module) {
    console.log("perm", module);

    $permision = getDatas('module', 'sub_module', $_GET['module']);
    if (module != undefined) {
        $permision = getDatas('module', 'sub_module', module);

    }
    //console.log("module", $permision);

    $permision.done(function ($permision) {
        if (!$permision.error) {
            $data = '';
            $permision = $permision.data;
            $.each($permision, function (i, v) {
                isMenu = v.is_menu==1 ? 'Oui':'Non';
                $data += `
                <tr>
                <td>` + v.name + `</td>
                <td>` + v.action_url + `</td>
                <td>` + isMenu + `</td>
                <td>` + v.description + `</td>
                <td>
                  <a class="btn btn-success">
                    <i class="fa fa-edit white"></i>
                  </a>
                </td>
              </tr>
                `;
            });
            $('#body_permission').html($data);
        }
    });


}

function getModel(uniqueId) {

    //console.log("module", $permision);
    $dataModel = '';
    $.ajax({
        url: firestoreUrl + 'model/' + uniqueId,
        type: "GET",
        contentType: 'application/json',
        dataType: "json",
        success: function (result) {
            console.log(result);
            hidePleaseWait();
            param = "";
            $.each(result.fields, function (i, v) {
                $key = '';
                // console.log(i, 'index');
                $.map(v, function (element, index) {
                    if (i != "model_name" && i != 'entity' && i != 'uniqueId') {
                        param += element + ", ";
                    }
                    if (i == 'entity') {
                        param += " " + i + ": " + element + ", ";
                    } else if (i == 'uniqueId') {
                        param += " model: " + element + ", ";
                    }

                });
                if (i != 'entity' && i != 'uniqueId') {
                    $.map(v, function (element, index) {
                        console.log("i=" + i);
                        if (i == "model_name") {
                            $("#modelName").text(element);
                        } else {

                            $dataModel += `
                                <tr>
                                <td>` + element + `</td>
                                <td>
                                <a class="btn btn-success">
                                    <i class="fa fa-edit white"></i>
                                </a>
                                </td>
                            </tr>
                                `;
                        }
                    });
                }

            });
            param += " entity_matricule";
            $('#body_model').html($dataModel);
            $('#param').append(param);
        },
        error: function (xhr, resp, text) {
            //  error to console
            console.log(xhr, resp, text);
        }
    });



}

function setActionUrl(name) {
    arrName = name.split(' ', 2);
    name = arrName[0] + "-" + arrName[1];
    name = name.toLowerCase();
    return name;
}

function addData(table, module) {
    var go;
    var data = $('#add_permission').serializeObject();
    //data.action_url = setActionUrl(data.name);
    var form_data = JSON.stringify(data);

    go = canContinue(data);
    console.log(form_data, $('#add_permission'));
    if (go) {
        $.ajax({
            url: myurl + table,
            type: "POST",
            contentType: 'application/json',
            dataType: "json",
            data: form_data,
            success: function (result) {
                console.log(result);

                getPermission(module);
            },
            error: function (xhr, resp, text) {
                //  error to console
                console.log(xhr, resp, text);
            }
        });
    }
}
uniqueId = newGuid();

function addModel() {
    var go;
    var data = $('#add_model').serializeObject();
    data.uniqueId = uniqueId;
    console.log(data, "ok", uniqueId);
    if ($_GET['uniqueId'] != '' && $_GET['uniqueId'] != undefined) {

        data.uniqueId = $_GET['uniqueId'];
    }

    var form_data = JSON.stringify(data);
    go = canContinue(data);
    console.log(form_data, data, customUrl + "addModel");
    if (go) {
        showPleaseWait();
        $.ajax({
            url: customUrl + "addModel",
            type: "POST",
            contentType: 'application/json',
            dataType: "json",
            data: form_data,
            success: function (result) {
                console.log(result, "res");

                getModel(result.uniqueId);
            },
            error: function (xhr, resp, text) {
                //  error to console
                console.log(xhr, resp, text);
            }
        });
    }
}
/**
 * Create a random Guid.
 *
 * @return {String}  random guid value.
 */
function newGuid() {
    return 'xxxxxxxx-xxxx-10xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g,
        function (c) {
            var r = Math.random() * 16 | 0,
                v = c == 'x' ? r : (r & 0x3 | 0x8);
            return v.toString(16);
        }).toUpperCase();
}

function getData(table, field, value) {
    return $.ajax({
        url: myurl + table + '/' + field + '/' + value,
        type: "GET",
        contentType: 'application/json',
        dataType: "json",
        error: function (xhr, resp, text) {
            // show error to console
            console.log(xhr, resp, text);
        }
    });
}

function getDatas(table, field = null, value = null) {
    console.log(myurl + table + '/' + field + '/' + value + '/?s');

    if (field != null, value != null) {
        return $.ajax({
            url: myurl + table + '/' + field + '/' + value + '/?s',
            type: "GET",
            contentType: 'application/json',
            dataType: "json",
            error: function (xhr, resp, text) {
                // show error to console
                console.log(xhr, resp);
                console.log(text, "entexte");

            }
        });
    } else {
        return $.ajax({
            url: myurl + table,
            type: "GET",
            contentType: 'application/json',
            dataType: "json",
            error: function (xhr, resp, text) {
                // show error to console
                console.log(xhr, resp, text);
            }
        });
    }
}

function getDataWith2Param(table, field, value, $field2, $value2) {
    console.log(myurl + table + '/' + field + '/' + value + "/?prop=" + $field2 + "&val=" + $value2);

    return $.ajax({
        url: myurl + table + '/' + field + '/' + value + "/?prop=" + $field2 + "&val=" + $value2,
        type: "GET",
        contentType: 'application/json',
        dataType: "json",
        error: function (xhr, resp, text) {
            // show error to console
            console.log(xhr, resp, text);
        }
    });
}

function deleteData(table, field, value) {
    return $.ajax({
        url: myurl + table + '/' + field + '/' + value,
        type: "DELETE",
        contentType: 'application/json',
        dataType: "json",
        error: function (xhr, resp, text) {
            // show error to console
            console.log(xhr, resp, text);
        }
    });
}

function deleteDataWith2Param(table, field, value, $field2, $value2) {
    return $.ajax({
        url: myurl + table + '/' + field + '/' + value + "/?prop=" + $field2 + "&val=" + $value2,
        type: "DELETE",
        contentType: 'application/json',
        dataType: "json",
        error: function (xhr, resp, text) {
            // show error to console
            console.log(xhr, resp, text);
        }
    });
}

function addTablRow() {
    $tr = `<tr id="addPermission">
    <form >
            <td>
            <div class="form-group">
                <input type="text" required class="form-control" id="name" name="name" placeholder="Le nom du module">
            </div>
            </td>
            <td>
            <div class="form-group">
                <input required class="form-control" id="description" name="description" placeholder="description du module">
            </div>
            </td>
            <td>
            <button type="button" onclick="addData('action')" class="btn btn-success">
                <i class="fa  fa-check-square white"></i>
                Valider
            </button>
            </td>
  </tr>`;
    if (!$("#addPermission").length) {
        $('#table_permission').append($tr);
    }
}

function canContinue(data) {
    var go;
    $.each(data, function (i, valueOfElement) {
        if (data[i] == '') {
            go = 'yes';
            $('#danger_content').text('');
            $('#danger_content').append('<p>Tout les champs doivent être rensignés</p>');
            $('#modal-danger').modal('show');
        }
    });
    if (go == 'yes') {
        return false;
    } else {
        return true;
    }
}

function showPleaseWait() {
    if (document.querySelector("#pleaseWaitDialog") == null) {
        var modalLoading = `<div class="modal" id="pleaseWaitDialog" data-backdrop="static" data-keyboard="false" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Patientez svp...</h4>
                </div>
                <div class="modal-body">
                    <div class="progress">
                      <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar"
                      aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%; height: 40px">
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>`;
        $(document.body).append(modalLoading);
    }
    $("#pleaseWaitDialog").modal("show");
}

/**
 * Hides "Please wait" overlay. See function showPleaseWait().
 */
function hidePleaseWait() {
    $("#pleaseWaitDialog").modal("hide");
}

function postData(formId, action, id) {
    $('#' + formId).submit(function (e) {
        e.preventDefault();
        var formDat = new FormData(this);

        showPleaseWait();
        var data = $('#' + formId).serializeObject();


        // // for (var key in data) {
        // //     formDat.append(key, data[key]);
        // //     // console.log(key, data[key], "key");

        // // }
        // // Display the key/value pairs
        // for (var pair of formDat.entries()) {
        //     console.log(pair[0] + ', ' + pair[1]);
        // }
        console.log("id", id);

        var formData = JSON.stringify(data);
        if (id != '' && id != undefined) {
            putData(formDat, customUrl + action + '&modif=' + id, formId);
        } else {
            $.ajax({
                url: customUrl + action,
                type: "POST",
                // contentType: 'application/json',
                dataType: "html",
                data: formDat,
                cache: false,
                enctype: 'multipart/form-data',
                processData: false, // tell jQuery not to process the data
                contentType: false, // tell jQuery not to set contentType
                timeout: 30000,
                success: function (result) {
                    console.log(result, "res"); 
                    hidePleaseWait();
                    //$('#publicationForm').reset();
                    //$("#publicationForm")[0].reset();
                    //faster version:
                    $('#' + formId)[0].reset();
                    //document.getElementById('publicationForm').reset();
                    //window.location.reload();
                    $('#postMessage').html(result);
                    $('#profile_img').src("");
                    // $(':input').val('');    
                    // $('#publicationForm').trigger('reset');
                },
                error: function (xhr, resp, text) {
                    //  error to console
                    console.log(xhr, resp, text);
                    hidePleaseWait();
                    $('#postMessage').html(`<div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-warning"></i> AkoyPrestation</h4>
                    Erreur !
                  </div>`);
                }
            });
        }

        // Now you can use formData.get('foo'), for example.
        // Don't forget e.preventDefault() if you want to stop normal form .submission
        console.log(formData, 'oui');
        return false;
    });
    // document.querySelector('#'+formId).addEventListener('submit', (e) => {

    //   });
    // var formData = new FormData(document.querySelector('#'+formId));

}

function putData(formData, modifUrl, formId="") {
    console.log(modifUrl);

    $.ajax({
        url: modifUrl,
        type: "POST",
        // contentType: 'application/json',
        dataType: "html",
        data: formData,
        cache: false,
        enctype: 'multipart/form-data',
        processData: false, // tell jQuery not to process the data
        contentType: false, // tell jQuery not to set contentType
        timeout: 30000,
        success: function (result) {
            console.log(result, "res");
            hidePleaseWait();
            $('#postMessage').html(result);
            $('#' + formId)[0].reset(); 
        },
        error: function (xhr, resp, text) {
            //  error to console
            console.log(xhr, resp, text);
            hidePleaseWait();
            $('#postMessage').html(`<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-warning"></i> AkoyPrestation</h4>
                Erreur !
              </div>`);
        }
    });
    // Now you can use formData.get('foo'), for example.
    // Don't forget e.preventDefault() if you want to stop normal form .submission

    // document.querySelector('#'+formId).addEventListener('submit', (e) => {

    //   });
    // var formData = new FormData(document.querySelector('#'+formId));

}

function getHTML(action) {
    showPleaseWait();
    $.ajax({
        url: customUrl + action,
        type: "GET",
        dataType: "html",
        success: function (result) {
            console.log("res", customUrl + action);
            hidePleaseWait();
            // $("#allDoc").toggle();
            // $("#searchDoc").toggle();
            $("#contentData").html(result);
        },
        error: function (xhr, resp, text) {
            hidePleaseWait();
            // $("#allDoc").toggle();
            // $("#searchDoc").toggle();
            $("#contentData").html("<p> Document non trouvé </p>");
            //  error to console
            console.log(xhr, resp, text);
        }
    });
}

$(document).ready(function () {
    $('#submitForm').submit(function (e) {
        showPleaseWait();
        $.ajax({
            url: customUrl + "searchView&data=" + $('#inputSearch').val(),
            type: "GET",
            dataType: "html",
            success: function (result) {
                console.log(result, "res");
                hidePleaseWait();
                // $("#allDoc").toggle();
                // $("#searchDoc").toggle();
                $("#contentData").html(result);
            },
            error: function (xhr, resp, text) {
                hidePleaseWait();
                // $("#allDoc").toggle();
                // $("#searchDoc").toggle();
                $("#contentData").html("<p> Document non trouvé </p>");
                //  error to console
                console.log(xhr, resp, text);
            }
        });
        return false;
    });
});