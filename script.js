function calculate() {
  var operand1 = parseFloat(document.getElementById('operand1').value);
  var operand2 = parseFloat(document.getElementById('operand2').value);
  var operator = document.querySelector('input[name="operator"]:checked').value;
  var result;

  switch (operator) {
    case '+':
      result = operand1 + operand2;
      break;
    case '-':
      result = operand1 - operand2;
      break;
    case '*':
      result = operand1 * operand2;
      break;
    case '/':
      if (operand2 !== 0) {
        result = operand1 / operand2;
      } else {
        result = 'Infinity';
      }
      break;
    default:
      result = 'Invalid Operator';
  }

  document.getElementById('result').value = result;
}

function clearInputs() {
  document.getElementById('operand1').value = '';
  document.getElementById('operand2').value = '';
  document.querySelector('input[name="operator"][value="+"]').checked = true;
  document.getElementById('result').value = '';
}
