const tour = {
  options: {
    useKeyboardNavigation: false,
    labels: {
      buttonSkip: 'Skip tour',
      buttonPrevious: 'Previous',
      buttonNext: 'Next',
      buttonStop: 'Finish'
    }
  },
  steps: [{
      target: '.navbar',
      header: {
        title: 'Welcome to the card game',
      },
      content: `Here you wil find misconceptions about Bitcoin.`
    },
    {
      target: '.searchBar',
      content: 'The Search is fast and immediate and searchs for exact strings of text. Give it a try, it‘s fun',
      params: {
        placement: 'top',
        enableScrolling: false
      }
    },
    {
      target: '.button-categories',
      content: 'Choose a category here.',
      params: {
        placement: 'left',
        enableScrolling: false
      }
    },
    {
      target: '#card0',
      content: 'Every card contains a misconception about Bitcoin.'
    },
    {
      target: '.cards-show-all',
      content: 'To see all cards, click on this button.'
    },
    {
      target: '.twitter-open-close-handle',
      header: {
        title: 'Realtime tweets',
      },
      content: `Here you will find a live tweet stream about Bitcoin, that you can configure to your needs.`
    }
  ]
};