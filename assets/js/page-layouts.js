var NU_LAYOUTS = (function(){

  var layouts = {
    'l1CenterPortrait': {
      name: 'l1CenterPortrait',
      numSlots: 1,
      numPortraits: 1,
      numLandscapes: 0,
      slots: [
        {
          idx: 1,
          type: 'portrait',
          width: '60%',
          height: '80%',
          left: '20%',
          top: '10%'
        }
      ]
    },
    'l4EqualLandscapes': {
      name: 'l4EqualLandscapes',
      numSlots: 4,
      numPortraits: 0,
      numLandscapes: 4,
      slots: [
        {
          idx: 1,
          type: 'landscape',
          width: '40%',
          height: '30%',
          left: '9.5%',
          top: '19.5%'
        },
        {
          idx: 2,
          type: 'landscape',
          width: '40%',
          height: '30%',
          left: '50.5%',
          top: '19.5%'
        },
        {
          idx: 3,
          type: 'landscape',
          width: '40%',
          height: '30%',
          left: '9.5%',
          top: '50.5%'
        },
        {
          idx: 4,
          type: 'landscape',
          width: '40%',
          height: '30%',
          left: '50.5%',
          top: '50.5%'
        }
      ]
    }
  };

  return layouts;

})();
