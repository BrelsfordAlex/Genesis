import React, { Component } from 'react';
import { Tab, Tabs, TabList, TabPanel } from 'react-tabs';
import './index.css';

//Declare and instansiate a Spotify-API object
import SpotifyWebApi from 'spotify-web-api-js';
const spotifyApi = new SpotifyWebApi();


const numTracks = 20;  //Number of reccommeneded songs -- (Not number of songs in playlist)


class App extends Component {
  constructor(){
    super();
    // Generate access token
    const params = this.getHashParams();
    const token = params.access_token;

    //set access token to API object
    if (token) {
      spotifyApi.setAccessToken(token);
    }
    //set states of variables prior to calling functions
    this.state = {
      loggedIn: token ? true : false,
      nowPlaying: { name: '', albumArt: '', artist: ''},
      me: {display_name: '', images: '', id: ''},
      likes: {name: '', artist:'', albumArt: '', total: '', id:''},
      similar: {tracks: []},
      newPlaylist:{id:'', link: ''},
      playlistName: '',
      shown: true,
      shown1: true,
      shown2: true,
      selectedIndex: 0,
      response: '',
      response1: '',
      tracks: -1
    }

    //Handle change when switching between screens in main function.
    this.handleChange = this.handleChange.bind(this);
    this.handleSubmit = this.handleSubmit.bind(this);
  }

  //handle change when switching between tabs
  handleSelect = index => {
    this.setState({ selectedIndex: index });
  };

  //return back to "create a playlist" tab
  handleButtonClick = () => {
    this.setState({ selectedIndex: 0 });
  };

  //set playlist name onClick.
  handleChange = event => {
    this.setState({ playlistName: event.target.value });
  };

  //determine if user entered a playlist name or not.
  //response will be determined if the text box was left blank or not
  handleSubmit(event) {
    event.preventDefault();

    if(this.state.playlistName == '')
    {
      this.setState({ response: "No name?.. No problem! Who needs names anyways?",
                      response1: "Send your nameless playlist to Spotify by clicking the button below"});
    }
    else{
      this.setState({ response: this.state.playlistName + " is what I would of choosen too!",
                      response1: "Now Send " + this.state.playlistName + " to Spotify... Unless youre scared 😱"});
    }
  }

  //toggle functions: switch between screen views in the main function
  toggle() {
		this.setState({
			shown: !this.state.shown
		});
  }

  toggle1() {
		this.setState({
			shown1: !this.state.shown1
    });
  }
  
  toggle2() {
    this.setState({
      shown2: !this.state.shown2
    });
  }
  
  //Generate a random string of characters to be used for the access token
  getHashParams() {
    var hashParams = {};
    var e, r = /([^&;=]+)=?([^&;]*)/g,
        q = window.location.hash.substring(1);
    e = r.exec(q)
    while (e) {
       hashParams[e[1]] = decodeURIComponent(e[2]);
       e = r.exec(q);
    }
    return hashParams;
  }


  // Return user information.
  // function called on first render
  // returns display name, profile picture, and user ID given by Spotify
  // If user has no profile picture - it will return a blank profile picture to display
  getUserInfo(){
    spotifyApi.getMe()
    .then((response) => {
      if(response.images[0] == null){
        this.setState({
          me: {
            display_name: response.display_name,
            images: 'https://i.imgur.com/tdi3NGa.png',
            id: response.id
          }
        });
      }
      else{
      this.setState({
        me: {
          display_name: response.display_name,
          images: response.images[0].url,
          id: response.id
         }
       });
      }
    })
  }

  // Get liked songs by the user
  // tracks returned is set to 50
  getLikedSongs(){
    spotifyApi.getMySavedTracks({
        limit: 50,
    })
    .then((response) => {
     var total = response.total 
     
     //determine if user has more than 50 liked songs
     if(total > 50){
        for(let i=0; i<50; i++){
        this.setState({
            likes:{
               name: response.items[i].track.name,
               artist: response.items[i].track.album.artists[0].name,
               albumArt: response.items[i].track.album.images[0].url,
               total: response.total,
               id: response.items[i].track.id
            }
         });
       }
      }
      else
      {
        for(let i=0; i<total; i++){
          this.setState({
              likes:{
                 name: response.items[i].track.name,
                 artist: response.items[i].track.album.artists[0].name,
                 albumArt: response.items[i].track.album.images[0].url,
                 total: response.total,
                 id: response.items[i].track.id
              }
           });
         }
      }
    })
  }

  // Get simular songs based on users liked tracks
  // function calls addTracks() which add tracks into playlist
  GetSimilar(){
    spotifyApi.getRecommendations({
      seed_tracks: this.state.likes.id,
      limit: numTracks
    })
    .then((response) =>{
      for(let i=0; i<numTracks; i++){
      this.setState({
        similar:{
           tracks: response.tracks[i].uri
        }
     });
    }
   })
   this.addTracks()
   this.setState({tracks: this.state.tracks + 1});
  }

// Creates new playlist in spotify.
// will be named Genesis: "user defined name"
createPlaylist(){
  spotifyApi.createPlaylist(this.state.me.id, {name: 'Genesis: '+ this.state.playlistName})
  .then((response) =>{
    this.setState({
      newPlaylist:{
         id: response.id,
         link: response.external_urls.spotify
      }
   });
 })
 this.state.shown2 = false;
 this.GetSimilar()
}


//Adds tracks to playlist created in createPlaylist()
//enters a recommended track for getSimilar() 
 addTracks(){
   spotifyApi.addTracksToPlaylist(this.state.me.id, this.state.newPlaylist.id, [this.state.similar.tracks])
   .then((response) =>{
    console.log(response)
 })
 }

 //Functions called on app load
  componentDidMount(){
    this.getUserInfo();
    this.getLikedSongs();
  }

  //do not allow back button press on logout
  componentWillMount() {
    setTimeout(() => {
      window.history.forward()
    }, 0)
    window.onunload=function(){null};
 }

 //logout of spotify
  logoutApp(){
    this.setState({
      loggedIn: false,
    });
    window.location.href = "https://www.spotify.com/logout/";
  }

  render() {

    //used to switch between views in main function
    var shown = {display: this.state.shown ? "block" : "none"};
		var hidden = {display: this.state.shown ? "none" : "block"};
    var shown1 = {display: this.state.shown1 ? "block" : "none"};
    var hidden1 = {display: this.state.shown1 ? "none" : "block"};
    var shown2 = {display: this.state.shown2 ? "block" : "none"};
		var hidden2 = {display: this.state.shown2 ? "none" : "block"};
    

    return (
      <div className="homeBanner">
      <img src={require('./Genesis_logo2.png')}  alt="Genesis logo" className="homeLogo" />
      <div className="userNameTxt"> Welcome, {this.state.me.display_name} </div>
      <img src={this.state.me.images} alt="User Profile picture" className="userNamePic" />
      <img src={require('./City.png')} alt="Genesis logo" className="city" />

      {/* Tabs on top of application */}
      <Tabs selectedIndex={this.state.selectedIndex}
        onSelect={this.handleSelect}>
        <TabList>
          <Tab className="tab">Create A Playlist</Tab>
          <Tab className="tab">About</Tab>
          <Tab className="tab"> FAQ </Tab>
          <Tab className="tab">Logout</Tab>
        </TabList>

      {/* Data for Create a playlist tab */}
          <TabPanel>
              <div className="txtBoxWhite"></div>

       <div style={shown2} >          
            <div style={ shown1 }> 
                    <div style={ shown }> 
                    <img src={require('./Genesis_logo.png')} alt="Genesis logo" className="homeLogo2" />
                    <center><button class="btnSpotify1" onClick={this.toggle.bind(this)}> Click Here To Begin </button></center>
                    </div>

                    <div style={ hidden }>
                        <div className="nameChoose"> Everyone knows a good playlist has a good name 🚫🧢 </div> 
                        <div className="nameChoose1">Please enter your playlist name in the box below </div>


                        <form onSubmit={this.handleSubmit}>
                            <center> 
                                <input className="txtBoxChoose" type="text" maxLength={30} value={this.state.playlistName.value} onChange={this.handleChange} />
                                
                                <div className="chooseSubmit"><input className="chooseSubmit1" type="submit" value="Confirm Playlist Name" onClick={this.toggle1.bind(this)}/></div>
                            </center>
                        </form>
                    </div>
            </div>
                    <div style={hidden1}>
                        <div className="nameChoose"> {this.state.response} </div>
                        <div className="nameChoose1"> {this.state.response1} </div>
                        <center><button className="chooseSubmit5" onClick={() => this.createPlaylist()}> Send to Spotify</button></center>
                    </div>
          </div>

          <div style={hidden2}> 
          <div className="nameChoose"> I hope you like clicking, {this.state.me.display_name}!  </div>
          <div className="nameChoose1"> 1 Click = 1 track in the playlist </div>
          <div className="nameChoose1"> Click as many times as you want...We wont judge 🤫</div>
          <center><div className="numTracks"> {this.state.tracks} Tracks </div></center>
          <center><button className="chooseSubmit2" onClick={() => this.GetSimilar()}> Add Tracks To {this.state.playlistName}</button></center>
          <center><div className="spotifyLink"><a className="chooseSubmit3" href={this.state.newPlaylist.link} target="_blank" > Go to Playlist</a></div></center>
          </div>    
          </TabPanel>
          
          {/* data for about tab */}
          <TabPanel>
          <div class="txtBoxWhite1">
          <div class="txtTitle1"> WELCOME TO GENESIS </div>

              <div className="txtbody1"> Tired of searching the Web for new music? Well look no further. Branch into the unknown and 
                        discover new music with Genesis! Our application will analyze your taste in music based on 
                        previous liked tracks and generate a new playlist gaurenteed to impress.    </div>

              <div className="txtTitle2">HOW DOES IT WORK?</div>

              <div class="txtbody1">    Take a quick music survey for Genesis to gather data and determine which music type best
                          suits you. Genesis will automatically generate a playlist based on your choices from the survey. 
                          After the survey is complete all you need to do is sit back, listen, and enjoy the music 😎. </div>
                            
                          <div class="txtbody2"> When you Like 👍 tracks, Genesis will automatically update accordingly to generate 
                            your perfect playlist giving you new music that is customized for you. </div>


                <center><button onClick={this.handleButtonClick} class="chooseSubmit4"> Roger That 👌</button></center>

            </div>
          </TabPanel>

          {/* data for FAQ tab */}
          <TabPanel>
              <div class="txtBoxWhite1">
              <div class="txtTitle3"> Frequently Asked Questions </div>
              <div className="txtbody1"> 1. Why is there so many emojis? 😎😎😎😎😎</div>
              </div>


          </TabPanel>

          {/* data for logout tab */}
          <TabPanel>
          <div className="logoutTxt"> We're sad to see you go 😢 </div>
          
       
          <div className="logoutBtn"><a className="chooseSubmit3" onClick={() => this.logoutApp()}> Logout of Spotify </a></div>
          </TabPanel>

      </Tabs>


      
     
      






      </div>
    );
  }
}

export default App;
