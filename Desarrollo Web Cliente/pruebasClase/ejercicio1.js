const valores = [true, 5, false, "hola", "adeu", 2];

function handle (array) {
  const textos = []
  const bool = []
  const nums = []

  for (let valor of valores){
    if (typeof valor === 'string') textos.push(valor);
    if (typeof valor === 'number') nums.push(valor);
    if (typeof valor === 'boolean') bool.push(valor);

    textos.sort();
    alert()
  }
}
