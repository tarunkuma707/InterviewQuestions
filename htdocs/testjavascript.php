<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>
<body>
  
</body>
</html>
<script>
const obj = {
  value: 42,
  getValue: function () {
    return this.value;
  },
};

console.log(obj.getValue());

const abc = obj.getValue;
console.log(abc());
</script>