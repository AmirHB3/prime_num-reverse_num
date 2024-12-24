function reverseNumber() {
    const number = document.getElementById("numberInput").value;
    let reversedNumber = "";

    for (let i = number.length - 1; i >= 0; i--) {
        reversedNumber += number[i];
    }

    document.getElementById("result").innerText = `معکوس عدد: ${reversedNumber}`;
}