<?php
    $id = $_SESSION['id'];
    $get_inventory = "SELECT name, state, size, unit, quantity, manufacturer, cas_number, comments, user_id FROM inventory WHERE user_id = $id";
    $inventory_query = mysqli_query($connection, $get_inventory);
    $item_count = mysqli_num_rows($inventory_query);

    $items = $inventory_query->fetch_all(MYSQLI_ASSOC);
?>

<script>
    // Variables
    var ROWS_PER_PAGE = 10;

    let table = document.querySelector("#table");
    let next = document.querySelector("#next");
    let prev = document.querySelector("#prev");
    let pagination = document.querySelector(".pagination");
    let table_body = document.getElementsByTagName("tbody");
    let table_size = document.querySelector("#table_size");

    var items_count = <?php echo $item_count; ?> ;
    var data = [];

    for (let i = 0; i < items_count; i++) {
        data[i] = <?php echo json_encode($items); ?> [i];
    }

    let current_row = "";
    let current_page_num = 1;
    let less_pages_required = false;
    let num_pages;
    let num_filtered_pages;

    // Functions
    function clear_table() {
        for (let i = 0; i < table_body[0].childElementCount; i++) {
            table_body[0].removeChild(table_body[0].childNodes[i]);
            i--;
        }
    }

    function fill_page_numbers() {
        while (pagination.childElementCount > 2) {
            pagination.removeChild(pagination.children[1]);
        }

        num_pages = Math.ceil(data.length / ROWS_PER_PAGE);

        for (let i = 1; i <= num_pages; i++) {
            let page_item = document.createElement("li");
            if (i == current_page_num) {
                page_item.classList = "page-link bg-primary text-white";
            } else {
                page_item.classList = "page-link";
            }

            page_item.id = i;
            page_item.textContent = i;

            pagination.insertBefore(page_item, pagination.lastElementChild);
        }

        for (let i = 1; i <= num_pages; i++) {
            pagination.children[i].addEventListener("click", (e) => {
                for (let i = 1; i <= num_pages; i++) {
                    let current_page_item = pagination.children[i];

                    if (current_page_item.id != e.target.id) {
                        current_page_item.classList = "page-link";
                    }
                }

                e.target.classList = "page-link bg-primary text-white";
                current_page_num = i;

                loadTable();
                $("#loading-modal").modal("hide");
            });
        }

        $("#loading-modal").modal("hide");
    }

    function loadTable() {
        $("#loading-modal").modal("show");
        clear_table();

        let startIndex = (current_page_num - 1) * ROWS_PER_PAGE;
        let endIndexBound = current_page_num * ROWS_PER_PAGE;
        let is_last_page = data.length < endIndexBound;

        var tr;
        for (let i = startIndex; i < (is_last_page ? data.length : endIndexBound); i++) {
            tr = $('<tr/>');
            tr.append("<td>" + data[i]['name'] + "</td>");
            tr.append("<td>" + data[i]['state'] + "</td>");
            tr.append("<td>" + data[i]['size'] + " " + data[i]['unit'] + "</td>");
            tr.append("<td>" + data[i]['quantity'] + "</td>");
            tr.append("<td>" + data[i]['manufacturer'] + "</td>");
            tr.append("<td>" + data[i]['cas_number'] + "</td>");
            tr.append("<td>" + data[i]['comments'] + "</td>");

            $('table').append(tr);
        }
    }

    // Event Listeners
    window.addEventListener("load", loadTable);
    window.addEventListener("load", fill_page_numbers);

    table_size.addEventListener("change", (e) => {
        ROWS_PER_PAGE = table_size.value;
        loadTable();
        fill_page_numbers();
    });

    prev.addEventListener("click", (e) => {
        if (current_page_num > 1) {
            current_page_num--;

            document.getElementById(current_page_num).click();
        }
    });

    next.addEventListener("click", (e) => {
        if (current_page_num < num_pages) {
            current_page_num++;

            document.getElementById(current_page_num).click();
        }
    });
</script>
