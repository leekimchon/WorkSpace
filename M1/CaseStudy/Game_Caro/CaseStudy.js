var table = '';
var arr = [];
var turn = 0;
function show() {
    for (var i = 0; i < 30; i++) {
        arr[i] = [];
        for (var j = 0; j < 30; j++) {
            arr[i][j] = '';
        };
    };

    for (var i = 0; i < 30; i++) {
        table += '<tr>';
        for (var j = 0; j < 30; j++) {
            table += '<td id="' + i + '_' + j + '" onclick="click_td(' + i + ',' + j + ')">' + arr[i][j] + '</td>';
        };
        table += '</tr>';
    };
    document.getElementById('show').innerHTML = table;
}

show();

function click_td(i, j) {
    if (turn == 0) {
        document.getElementById(i + '_' + j).innerHTML = "X";
        document.getElementById(i + '_' + j).style.color = "red";
        arr[i][j] = 'X';
        turn = 1;
    } else {
        document.getElementById(i + '_' + j).innerHTML = 'O';
        document.getElementById(i + '_' + j).style.color = "#00d800";
        arr[i][j] = 'O';
        turn = 0;
    };
    sosanh(i, j);
    console.log(i+"_"+j)
};

function sosanh(i, j) {
    sosanh_ngang(i, j);
    sosanh_doc(i, j);
    sosanh_cheotrai(i, j);
    sosanh_cheophai(i, j);
};

function click_play() {
    show();
};

function sosanh_ngang(i, j) {
    if (arr[i][j] == arr[i][j + 1] && arr[i][j] == arr[i][j + 2] && arr[i][j] == arr[i][j + 3] && arr[i][j] == arr[i][j + 4]) {
        setTimeout(set, 100)
        function set() {
            alert(arr[i][j] + ' Win');
        };
    } else if (arr[i][j] == arr[i][j - 1] && arr[i][j] == arr[i][j - 2] && arr[i][j] == arr[i][j - 3] && arr[i][j] == arr[i][j - 4]) {
        setTimeout(set, 100)
        function set() {
            alert(arr[i][j] + ' Win');
        };
    } else if (arr[i][j] == arr[i][j - 1] && arr[i][j] == arr[i][j + 1] && arr[i][j] == arr[i][j + 2] && arr[i][j] == arr[i][j + 3]) {
        setTimeout(set, 100)
        function set() {
            alert(arr[i][j] + ' Win');
        };
    } else if (arr[i][j] == arr[i][j + 1] && arr[i][j] == arr[i][j - 1] && arr[i][j] == arr[i][j - 2] && arr[i][j] == arr[i][j - 3]) {
        setTimeout(set, 100)
        function set() {
            alert(arr[i][j] + ' Win');
        };
    } else if (arr[i][j] == arr[i][j + 1] && arr[i][j] == arr[i][j + 2] && arr[i][j] == arr[i][j - 1] && arr[i][j] == arr[i][j - 2]) {
        setTimeout(set, 100)
        function set() {
            alert(arr[i][j] + ' Win');
        };
    };
};

function sosanh_doc(i, j) {
    if (arr[i][j] == arr[i - 1][j] && arr[i][j] == arr[i - 2][j] && arr[i][j] == arr[i - 3][j] && arr[i][j] == arr[i - 4][j]) {
        setTimeout(set, 100)
        function set() {
            alert(arr[i][j] + ' Win');
        };
    } else if (arr[i][j] == arr[i + 1][j] && arr[i][j] == arr[i + 2][j] && arr[i][j] == arr[i + 3][j] && arr[i][j] == arr[i + 4][j]) {
        setTimeout(set, 100)
        function set() {
            alert(arr[i][j] + ' Win');
        };
    } else if (arr[i][j] == arr[i - 1][j] && arr[i][j] == arr[i + 1][j] && arr[i][j] == arr[i + 2][j] && arr[i][j] == arr[i + 3][j]) {
        setTimeout(set, 100)
        function set() {
            alert(arr[i][j] + ' Win');
        };
    } else if (arr[i][j] == arr[i + 1][j] && arr[i][j] == arr[i - 1][j] && arr[i][j] == arr[i - 2][j] && arr[i][j] == arr[i - 3][j]) {
        setTimeout(set, 100)
        function set() {
            alert(arr[i][j] + ' Win');
        };
    } else if (arr[i][j] == arr[i + 1][j] && arr[i][j] == arr[i + 2][j] && arr[i][j] == arr[i - 1][j] && arr[i][j] == arr[i - 2][j]) {
        setTimeout(set, 100)
        function set() {
            alert(arr[i][j] + ' Win');
        };
    }
};

function sosanh_cheotrai(i, j) {
    if (arr[i][j] == arr[i + 1][j + 1] && arr[i][j] == arr[i + 2][j + 2] && arr[i][j] == arr[i + 3][j + 3] && arr[i][j] == arr[i + 4][j + 4]) {
        setTimeout(set, 100)
        function set() {
            alert(arr[i][j] + ' Win');
        };
    } else if (arr[i][j] == arr[i - 1][j - 1] && arr[i][j] == arr[i - 2][j - 2] && arr[i][j] == arr[i - 3][j - 3] && arr[i][j] == arr[i - 4][j - 4]) {
        setTimeout(set, 100)
        function set() {
            alert(arr[i][j] + ' Win');
        };
    } else if (arr[i][j] == arr[i + 1][j + 1] && arr[i][j] == arr[i - 1][j - 1] && arr[i][j] == arr[i - 2][j - 2] && arr[i][j] == arr[i - 3][j - 3]) {
        setTimeout(set, 100)
        function set() {
            alert(arr[i][j] + ' Win');
        };
    } else if (arr[i][j] == arr[i - 1][j - 1] && arr[i][j] == arr[i + 1][j + 1] && arr[i][j] == arr[i + 2][j + 2] && arr[i][j] == arr[i + 3][j + 3]) {
        setTimeout(set, 100)
        function set() {
            alert(arr[i][j] + ' Win');
        };
    } else if (arr[i][j] == arr[i - 1][j - 1] && arr[i][j] == arr[i - 2][j - 2] && arr[i][j] == arr[i + 2][j + 2] && arr[i][j] == arr[i + 1][j + 1]) {
        setTimeout(set, 100)
        function set() {
            alert(arr[i][j] + ' Win');
        };
    };
}

function sosanh_cheophai(i, j) {
    console.log(arr[i][j])
    if (arr[i][j] == arr[i + 1][j - 1] && arr[i][j] == arr[i + 2][j - 2] && arr[i][j] == arr[i + 3][j - 3] && arr[i][j] == arr[i + 4][j - 4]) {
        setTimeout(set, 100)
        function set() {
            alert(arr[i][j] + ' Win');
        };
    } else if (arr[i][j] == arr[i - 1][j + 1] && arr[i][j] == arr[i - 2][j + 2] && arr[i][j] == arr[i - 3][j + 3] && arr[i][j] == arr[i - 4][j + 4]) {
        setTimeout(set, 100)
        function set() {
            alert(arr[i][j] + ' Win');
        };
    } else if (arr[i][j] == arr[i + 1][j - 1] && arr[i][j] == arr[i - 1][j + 1] && arr[i][j] == arr[i - 2][j + 2] && arr[i][j] == arr[i - 3][j + 3]) {
        setTimeout(set, 100)
        function set() {
            alert(arr[i][j] + ' Win');
        };
    } else if (arr[i][j] == arr[i - 1][j + 1] && arr[i][j] == arr[i + 1][j - 1] && arr[i][j] == arr[i + 2][j - 2] && arr[i][j] == arr[i + 3][j - 3]) {
        setTimeout(set, 100)
        function set() {
            alert(arr[i][j] + ' Win');
        };
    } else if (arr[i][j] == arr[i - 1][j + 1] && arr[i][j] == arr[i - 2][j + 2] && arr[i][j] == arr[i + 1][j - 1] && arr[i][j] == arr[i + 2][j - 2]) {
        setTimeout(set, 100)
        function set() {
            alert(arr[i][j] + ' Win');
        };
    };
}