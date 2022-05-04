let a = {'a': 5}

function reassign() {
  obj = {'b': 5}
}

let obj = {'c': 10}
reassign()
console.log(a)
console.log(obj)