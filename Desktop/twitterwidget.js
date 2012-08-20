new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 7,
  interval: 30000,
  width: 250,
  height: 400,
  theme: {
    shell: {
      background: '#1ad3d9',
      color: '#ffffff'
    },
    tweets: {
      background: '#000000',
      color: '#ffffff',
      links: '#1ad3d9'
    }
  },
  features: {
    scrollbar: false,
    loop: false,
    live: false,
    behavior: 'all'
  }
}).render().setUser('SummitEast13').start();