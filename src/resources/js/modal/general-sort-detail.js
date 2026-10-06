const form = document.getElementById("general-sort-detail-form");
form.onsubmit = (event) => {
    event.preventDefault();
    // ソート条件レコードからバックエンドに送信するソート条件を組み立てる
    const sortCondRecords = form.querySelectorAll(".sort-cond-record");
    const sortCondInputs = Array.from(sortCondRecords).flatMap(
        (record, index) => {
            const sortCondId = record.dataset.sortCondId;
            const sortCondOrder = index + 1;
            const sortCondCategoryAndDirection = sortCondId.split("_");
            return [
                {
                    name: `sort_conditions[${index}][id]`,
                    value: sortCondCategoryAndDirection[0],
                },
                {
                    name: `sort_conditions[${index}][order]`,
                    value: sortCondOrder,
                },
                {
                    name: `sort_conditions[${index}][direction]`,
                    value: sortCondCategoryAndDirection[1],
                },
            ];
        },
    );

    sortCondInputs.forEach(({ name, value }) => {
        const input = document.createElement("input");
        input.type = "hidden";
        input.name = name;
        input.value = value;
        form.appendChild(input);
    });

    form.submit();
};
/** ソート条件レコードを追加する **/
function setSortCond(button) {
    const id = button.id;
    const sortCondContainer = document.getElementById("current-sort");
    const sortCondRecords =
        sortCondContainer.querySelectorAll(".sort-cond-record");
    /** すでにソート条件が存在している場合、処理を終了する **/
    if (
        Array.from(sortCondRecords).some(
            (record) => record.dataset.sortCondId === id,
        )
    ) {
        return;
    }
    /** ソート条件1行分の要素を作成 **/
    document.getElementById(id).disabled = true;
    const currentSortCondLength = sortCondRecords.length;
    const wrapper = document.createElement("div");
    wrapper.classList.add(
        "sort-cond-record",
        "flex",
        "justify-start",
        "items-center",
        "mb-2",
        "pr-4",
        "py-3",
        "border",
        "border-solid",
        "border-brand-detail-title-border",
        "bg-brand-sort-detail-current-sort",
        "w-full",
        "rounded-md",
        "bg-opacity-40",
    );
    wrapper.dataset.sortCondId = id;

    const label = document.createElement("p");
    label.classList.add(
        "flex",
        "items-center",
        "justify-start",
        "text-2xl",
        "text-brand-detail-title-border",
        "w-1/4",
        "ml-5",
    );
    const labelNumber = document.createElement("span");
    labelNumber.classList.add("sort-cond-number", "text-3xl");
    labelNumber.textContent = currentSortCondLength + 1;
    const labelSpan = document.createElement("span");
    labelSpan.classList.add(
        "flex",
        "items-center",
        "justify-start",
        "text-xl",
        "text-white",
        "ml-2",
    );
    labelSpan.textContent = document.getElementById(
        id.replace(/_(asc|desc)$/, "_label"),
    ).textContent;

    const toggleWrapper = document.createElement("div");
    toggleWrapper.classList.add("flex", "flex-col", "items-center", "w-1/4");
    const descButton = document.createElement("button");
    const ascButton = document.createElement("button");
    if (id.endsWith("_desc")) {
        descButton.selected = true;
        descButton.classList.add(
            "btn-pushable",
            "text-black",
            "w-1/2",
            "h-10",
            "text-2xl",
            "bg-brand-sort-detail-button-selected",
            "pointer-events-none",
            "rounded-md",
        );
        ascButton.classList.add(
            "btn-pushable",
            "text-black",
            "w-1/2",
            "h-10",
            "text-2xl",
            "bg-brand-sort-detail-sort-switch",
            "rounded-md",
        );
    } else {
        descButton.classList.add(
            "btn-pushable",
            "text-black",
            "w-1/2",
            "h-10",
            "text-2xl",
            "bg-brand-sort-detail-sort-switch",
            "rounded-md",
        );
        ascButton.selected = true;
        ascButton.classList.add(
            "btn-pushable",
            "text-black",
            "w-1/2",
            "h-10",
            "text-2xl",
            "bg-brand-sort-detail-button-selected",
            "pointer-events-none",
            "rounded-md",
        );
    }
    descButton.innerHTML = "&#9660;";
    descButton.setAttribute("onclick", `changeCondAsc(this)`);
    descButton.type = "button";
    ascButton.innerHTML = "&#9650;";
    ascButton.setAttribute("onclick", `changeCondDesc(this)`);
    ascButton.type = "button";

    const moveArea = document.createElement("div");
    moveArea.classList.add(
        "sort-cond-move",
        "flex",
        "justify-start",
        "items-center",
        "w-1/4",
        "h-full",
    );
    const moveCondDownArea = document.createElement("div");
    moveCondDownArea.classList.add(
        "move-cond-down-area",
        "flex",
        "justify-center",
        "items-center",
        "w-1/2",
        "h-full",
    );
    const moveCondUpArea = document.createElement("div");
    moveCondUpArea.classList.add(
        "move-cond-up-area",
        "flex",
        "justify-center",
        "items-center",
        "w-1/2",
        "h-full",
    );

    /** 検索条件解除ボタンの作成 **/
    const removeButton = document.createElement("button");
    removeButton.classList.add(
        "btn-pushable",
        "text-white",
        "text-2xl",
        "bg-black",
        "ml-auto",
        "h-10",
        "w-10",
        "rounded-md",
        "flex",
        "justify-center",
        "items-center",
    );
    removeButton.innerHTML = "&times;";
    removeButton.dataset.sortCondId = id;
    removeButton.type = "button";
    removeButton.setAttribute("onclick", "removeSortCond(this)");

    /** 選択されたソート条件レコード追加ボタンの非活性化**/
    disableSortCondSet(id);

    /** 要素の組み立て **/
    label.appendChild(labelNumber);
    label.appendChild(labelSpan);
    wrapper.appendChild(label);
    toggleWrapper.appendChild(descButton);
    toggleWrapper.appendChild(ascButton);
    wrapper.appendChild(toggleWrapper);
    wrapper.appendChild(moveArea);
    moveArea.appendChild(moveCondDownArea);
    moveArea.appendChild(moveCondUpArea);
    wrapper.appendChild(removeButton);
    sortCondContainer.appendChild(wrapper);
    redrawSortCondMoveButtons();
}

/** ソート条件を降順に切り替える **/
function changeCondDesc(button) {
    descButton = button.previousElementSibling;
    descButton.classList.remove(
        "pointer-events-none",
        "bg-brand-sort-detail-button-selected",
    );
    descButton.classList.add("bg-brand-sort-detail-sort-switch");
    button.classList.remove("bg-brand-sort-detail-sort-switch");
    button.classList.add(
        "pointer-events-none",
        "bg-brand-sort-detail-button-selected",
    );
}

/** ソート条件を昇順に切り替える **/
function changeCondAsc(button) {
    ascButton = button.nextElementSibling;
    ascButton.classList.remove(
        "pointer-events-none",
        "bg-brand-sort-detail-button-selected",
    );
    ascButton.classList.add("bg-brand-sort-detail-sort-switch");
    button.classList.remove("bg-brand-sort-detail-sort-switch");
    button.classList.add(
        "pointer-events-none",
        "bg-brand-sort-detail-button-selected",
    );
}

/** ソート条件レコードを1つ上に移動する **/
function upSortCond(button) {
    sortCondRecord = button.closest(".sort-cond-record");
    previousRecord = sortCondRecord.previousElementSibling;
    if (previousRecord) {
        sortCondRecord.parentNode.insertBefore(sortCondRecord, previousRecord);
        renumberingSortCond();
        redrawSortCondMoveButtons();
    }
}

/** ソート条件レコードを1つ下に移動する **/
function downSortCond(button) {
    sortCondRecord = button.closest(".sort-cond-record");
    nextRecord = sortCondRecord.nextElementSibling;
    if (nextRecord) {
        sortCondRecord.parentNode.insertBefore(nextRecord, sortCondRecord);
        renumberingSortCond();
        redrawSortCondMoveButtons();
    }
}

/** 全てのソート条件レコードの優先順位を振り直す **/
function renumberingSortCond() {
    const sortCondContainer = document.getElementById("current-sort");

    if (!sortCondContainer) {
        return;
    }

    const sortCondRecords =
        sortCondContainer.querySelectorAll(".sort-cond-record");
    if (sortCondRecords.length === 0) {
        return;
    }
    sortCondRecords.forEach((record, index) => {
        const labelNumber = record.querySelector(".sort-cond-number");
        if (!labelNumber) {
            return;
        }

        labelNumber.textContent = index + 1;
    });
}

/** 全てのソート条件レコードの移動ボタンを再描画する **/
function redrawSortCondMoveButtons() {
    const sortCondContainer = document.getElementById("current-sort");
    const sortCondRecords =
        sortCondContainer.querySelectorAll(".sort-cond-record");
    if (sortCondRecords.length === 0) {
        return;
    }
    sortCondRecords.forEach((record, index) => {
        const moveArea = record.querySelector(".sort-cond-move");
        const moveCondUpArea = record.querySelector(".move-cond-up-area");
        const moveCondDownArea = record.querySelector(".move-cond-down-area");
        const downButton = record.querySelector(".down");
        const upButton = record.querySelector(".up");
        if (sortCondRecords.length === 1) {
            // ソート条件レコード1件の場合は、上下移動ボタンを削除する
            if (downButton) {
                downButton.remove();
            }
            if (upButton) {
                upButton.remove();
            }
        } else if (index === 0) {
            // 最初のソート条件レコードで、下移動ボタンが存在しない場合は追加する
            if (!downButton) {
                const moveCondDownArea = record.querySelector(
                    ".move-cond-down-area",
                );
                const downButton = generateDownButton();
                downButton.setAttribute("onclick", "downSortCond(this)");
                moveCondDownArea.appendChild(downButton);
            }

            // 最初のソート条件レコードで、上移動ボタンが存在する場合は削除する
            if (upButton) {
                upButton.remove();
            }
        } else if (index === sortCondRecords.length - 1) {
            // 最後のソート条件レコードで、上移動ボタンが存在しない場合は追加する
            if (!upButton) {
                const moveCondUpArea =
                    record.querySelector(".move-cond-up-area");
                const upButton = generateUpButton();
                moveCondUpArea.appendChild(upButton);
            }

            // 最後のソート条件レコードで、下移動ボタンが存在する場合は削除する
            if (downButton) {
                downButton.remove();
            }
        } else {
            // 中間のソート条件レコードで、上移動ボタンが存在しない場合は追加する
            if (!upButton) {
                const moveCondUpArea =
                    record.querySelector(".move-cond-up-area");
                const upButton = generateUpButton();
                moveCondUpArea.appendChild(upButton);
            }

            // 中間のソート条件レコードで、下移動ボタンが存在しない場合は追加する
            if (!downButton) {
                const moveCondDownArea = record.querySelector(
                    ".move-cond-down-area",
                );
                const downButton = generateDownButton();
                moveCondDownArea.appendChild(downButton);
            }
        }
    });
}

/** ソート条件を追加する昇順・降順のセットを非活性化する **/
function disableSortCondSet(sortCondId) {
    const parent = document.getElementById(sortCondId).parentElement;
    const buttons = parent.querySelectorAll("button");
    buttons.forEach((button) => {
        button.classList.add("pointer-events-none", "opacity-50");
        button.disabled = true;
    });
}

/** ソート条件を追加する昇順・降順のセットを活性化する **/
function enableSortCondSet(sortCondId) {
    const parent = document.getElementById(sortCondId).parentElement;
    const buttons = parent.querySelectorAll("button");
    buttons.forEach((button) => {
        button.classList.remove("pointer-events-none", "opacity-50");
        button.disabled = false;
    });
}

/** 選択したソート条件レコードを削除する **/
function removeSortCond(button) {
    const id = button.parentElement.dataset.sortCondId;
    button.parentElement.remove();
    renumberingSortCond();
    redrawSortCondMoveButtons();
    enableSortCondSet(id);
}

/** 全てのソート条件レコードを削除する **/
function removeAllSortCond() {
    const sortCondContainer = document.getElementById("current-sort");
    const sortCondRecords =
        sortCondContainer.querySelectorAll(".sort-cond-record");
    if (sortCondRecords.length === 0) {
        return;
    }
    sortCondRecords.forEach((record) => {
        const id = record.dataset.sortCondId;
        record.remove();
        enableSortCondSet(id);
    });
}

/** ソート条件レコードの上移動ボタンを生成する **/
function generateUpButton() {
    const upButton = document.createElement("button");
    upButton.type = "button";
    upButton.classList.add(
        "up",
        "btn-pushable",
        "text-3xl",
        "font-bold",
        "rounded-full",
        "w-14",
        "h-14",
        "flex",
        "justify-center",
        "items-center",
        "bg-brand-sort-detail-toggle-switch",
        "text-brand-sort-detail-current-sort-up-arrow",
    );
    upButton.innerHTML = "&and;";
    upButton.setAttribute("onclick", "upSortCond(this)");
    return upButton;
}

/** ソート条件レコードの下移動ボタンを生成する **/
function generateDownButton() {
    const downButton = document.createElement("button");
    downButton.type = "button";
    downButton.classList.add(
        "down",
        "btn-pushable",
        "text-3xl",
        "font-bold",
        "rounded-full",
        "w-14",
        "h-14",
        "flex",
        "justify-center",
        "items-center",
        "bg-brand-sort-detail-toggle-switch",
        "text-brand-sort-detail-current-sort-down-arrow",
    );
    downButton.innerHTML = "&or;";
    downButton.setAttribute("onclick", "downSortCond(this)");
    return downButton;
}

/** ソート条件をリセットする **/
function resetSort() {
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');
    checkboxes.forEach((checkbox) => {
        checkbox.checked = false;
    });
    const toggleOrRadios = document.querySelectorAll(
        'input[type="radio"][value="or"]',
    );
    toggleOrRadios.forEach((radio) => {
        radio.checked = true;
    });
    const toggleAndRadios = document.querySelectorAll(
        'input[type="radio"][value="and"]',
    );
    toggleAndRadios.forEach((radio) => {
        radio.checked = false;
    });
    removeAllSortCond();
}

window.changeCondAsc = changeCondAsc;
window.changeCondDesc = changeCondDesc;
window.downSortCond = downSortCond;
window.removeSortCond = removeSortCond;
window.resetSort = resetSort;
window.setSortCond = setSortCond;
window.upSortCond = upSortCond;
