
cells = document.querySelectorAll(".cell");
const status = document.querySelector("#status");
const reset = document.querySelector("#reset");
const winningRules = [
    [0, 1, 2],
    [3, 4, 5],
    [6, 7, 8],
    [0, 3, 6],
    [1, 4, 7],
    [2, 5, 8],
    [0, 4, 8],
    [2, 4, 6]
];
let options = ["", "", "", "", "", "", "", "", ""];
let currentPlayer = "X";
let running = false;

initializeGame();

function initializeGame() {
    cells.forEach(cell => cell.addEventListener("click", cellChoosed));
    reset.addEventListener("click", restartGame);
    status.textContent = ` Giliran ${currentPlayer}`;
    if (currentPlayer == "X") {
        status.style.color = "blue";
    } else {
        status.style.color = "red";
    }
    
    running = true;
}
function cellChoosed() {
    const dataIndex = this.getAttribute("dataIndex");

    if (options[dataIndex] != "" || !running) {
        return;
    }

    updateCell(this, dataIndex);
    checkWinner();
}
function updateCell(cell, index) {
    options[index] = currentPlayer;
    cell.textContent = currentPlayer;
}
function playerTurn() {
    currentPlayer = (currentPlayer == "X") ? "O" : "X";
    status.textContent = ` Giliran ${currentPlayer}`;
    if (currentPlayer == "X") {
        status.style.color = "blue";
    } else {
        status.style.color = "red";
    }
}
function checkWinner() {
    let roundWon = false;

    for (let i = 0; i < winningRules.length; i++) {
        const condition = winningRules[i];
        const cellA = options[condition[0]];
        const cellB = options[condition[1]];
        const cellC = options[condition[2]];

        if (cellA == "" || cellB == "" || cellC == "") {
            continue;
        }
        if (cellA == cellB && cellB == cellC) {
            roundWon = true;
            break;
        }
    }

    if (roundWon) {
        status.textContent = `Pemenang Player ${currentPlayer}!`;
        status.style.color = "gold";
        running = false;
    }
    else if (!options.includes("")) {
        status.textContent = `Draw!`;
        status.style.color = "black";
        running = false;
    }
    else {
        playerTurn();
    }
}
function restartGame() {
    currentPlayer = "X";
    options = ["", "", "", "", "", "", "", "", ""];
    status.textContent = ` Giliran ${currentPlayer}`;
    status.style.color = "blue";
    cells.forEach(cell => cell.textContent = "");
    running = true;
}
