def calculate(num1, num2, operator):
  """Performs the specified arithmetic operation on two numbers.

  Args:
      num1: The first number.
      num2: The second number.
      operator: The arithmetic operator (+, -, *, or /).

  Returns:
      The result of the operation.
  """
  if operator == "+":
    return num1 + num2
  elif operator == "-":
    return num1 - num2
  elif operator == "*":
    return num1 * num2
  elif operator == "/":
    if num2 == 0:
      print("Error: Cannot divide by zero.")
      return None
    else:
      return num1 / num2
  else:
    print("Invalid operator.")
    return None

while True:
  # Get user input
  num1 = float(input("Enter the first number: "))
  num2 = float(input("Enter the second number: "))
  operator = input("Choose an operator (+, -, *, /): ")

  # Perform calculation
  result = calculate(num1, num2, operator)

  # Display result
  if result is not None:
    print(f"The result is: {result}")

  # Ask if user wants to continue
  choice = input("Do you want to perform another calculation? (y/n): ")
  if choice.lower() != "y":
    break

print("Calculator closed.")
