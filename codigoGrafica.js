// Use Morris.Area instead of Morris.Line
/*Morris.Area({
  element: 'graph',
  behaveLikeLine: true,
  data: [
    {x: '2011 Q1', y: 3, z: 3},
    {x: '2011 Q4', y: 2, z: 2}
  ],
  xkey: 'x',
  ykeys: ['y', 'z'],
  labels: ['Y', 'Z']
});*/
/*new Morris.Line({

  element: 'myfirstchart',

  data: [
      { x: '1 Q1',y: 20, z: 20},
      { x: '2 Q2'},
      { x: '3 Q3'},
      { x: '4 Q4'},
      { x: '5 Q5', y:5, z:5}

      //{ year: '2008', value: 20},
   //  { year: '2009'},
    // { year: '2010'},
     //{ year: '2011', value: 2}
  ],

    xkey: 'x',

    ykeys: ['y','z'],

    labels: ['y','z']
  });*/
  (function(){

    var tipocambio = [
            {moneda:'usd', mes: 'enero', tipo: 540}
            {moneda:'usd', mes: 'febrero', tipo: 550}
            {moneda:'usd', mes: 'marzo', tipo: 600}
            {moneda:'eur', mes: 'enero', tipo: 630}
            {moneda:'eur', mes: 'febrero', tipo: 610}
            {moneda:'eur', mes: 'marzo', tipo: 680}
    ];

    var categorias = Enumerable.from(tipocambio)
                               .select(function(x) {return x.mes; })
                               .Distinct()
                               .ToArray();

    var arrCategorias = [];
    arrCategorias.push('mes');
    categorias.forEach(function(mes) {arrCategorias.push(mes);});

    console.log(arrCategorias);
  }());
