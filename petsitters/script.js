let petSitters = [
  {
    imageUrl:
      "https://images.unsplash.com/photo-1629747490241-624f07d70e1e?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    name: "John",
    hourlyRate: 20.0,
    isHired: false,
    timeRemaining: 0,
  },
  {
    imageUrl:
      "https://images.unsplash.com/photo-1525134479668-1bee5c7c6845?q=80&w=1587&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    name: "Tasha",
    hourlyRate: 25.0,
    isHired: false,
    timeRemaining: 0,
  },
  {
    imageUrl:
      "https://images.unsplash.com/photo-1572631382901-cf1a0a6087cb?q=80&w=1582&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    name: "Cummins",
    hourlyRate: 25.0,
    isHired: false,
    timeRemaining: 0,
  },
  {
    imageUrl:
      "https://images.unsplash.com/photo-1576695444267-40cdd214f06e?q=80&w=1444&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    name: "Reedy",
    hourlyRate: 25.0,
    isHired: false,
    timeRemaining: 0,
  },
  {
    imageUrl:
      "https://images.unsplash.com/photo-1605949405965-d49ada3f9189?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    name: "Jason",
    hourlyRate: 25.0,
    isHired: false,
    timeRemaining: 0,
  },
  {
    imageUrl:
      "https://images.unsplash.com/photo-1606122017369-d782bbb78f32?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    name: "Chloe",
    hourlyRate: 25.0,
    isHired: false,
    timeRemaining: 0,
  },
  {
    imageUrl:
      "https://images.unsplash.com/photo-1619300026534-8e8a76941138?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    name: "Tom",
    hourlyRate: 25.0,
    isHired: false,
    timeRemaining: 0,
  },
  {
    imageUrl:
      "https://images.unsplash.com/photo-1484517186945-df8151a1a871?q=80&w=1498&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    name: "Starc",
    hourlyRate: 25.0,
    isHired: false,
    timeRemaining: 0,
  },
  // Add more pet sitters as needed
];

const localStorageCheck = JSON.parse(localStorage.getItem("petSitters"));

petSitters = localStorageCheck || petSitters;
console.log(petSitters);

// Individual Petsitter======================================

const JohnPic = document.getElementById("JohnProfiePic");
const StarcPic = document.getElementById("StarcProfiePic");
const TomPic = document.getElementById("TomProfiePic");
const TashaPic = document.getElementById("TashaProfiePic");
const ReedyPic = document.getElementById("ReedyProfiePic");
const JasonPic = document.getElementById("JasonProfiePic");
const CumminsPic = document.getElementById("CumminsProfiePic");
const ChloePic = document.getElementById("ChloeProfiePic");

//Petsitter is hired or not?====================================

const JohnHired = document.getElementById("isJohnHired");
const StarcHired = document.getElementById("isStarcHired");
const TomHired = document.getElementById("isTomHired");
const TashaHired = document.getElementById("isTashaHired");
const ReedyHired = document.getElementById("isReedyHired");
const JasonHired = document.getElementById("isJasonHired");
const CumminsHired = document.getElementById("isCumminsHired");
const ChloeHired = document.getElementById("isCholeHired");

//Setting the remaining time divs

const JohnRemainingTime = document.getElementById("JohnRemainingTime")
const ChloeRemainingTime = document.getElementById("ChloeRemainingTime")
const JasonRemainingTime = document.getElementById("JasonRemainingTime")
const ReedyRemainingTime = document.getElementById("ReedyRemainingTime")
const StarcRemainingTime = document.getElementById("StarcRemainingTime")
const TashaRemainingTime = document.getElementById("TashaRemainingTime")
const TomRemainingTime = document.getElementById("TomRemainingTime")
const CumminsRemainingTime = document.getElementById("CumminsRemainingTime")


const profiles = [
  {
    image: JohnPic,
    hired: JohnHired,
    remainingTime: JohnRemainingTime
  },
  {
    image: TashaPic,
    hired: TashaHired,
    remainingTime: TashaRemainingTime
  },
  {
    image: CumminsPic,
    hired: CumminsHired,
    remainingTime: CumminsRemainingTime
  },
  {
    image: ReedyPic,
    hired: ReedyHired,
    remainingTime: ReedyRemainingTime
  },
  {
    image: JasonPic,
    hired: JasonHired,
    remainingTime: JasonRemainingTime
  },
  {
    image: ChloePic,
    hired: ChloeHired,
    remainingTime: ChloeRemainingTime
  },
  {
    image: TomPic,
    hired: TomHired,
    remainingTime: TomRemainingTime
  },
  {
    image: StarcPic,
    hired: StarcHired,
    remainingTime: StarcRemainingTime
  },
];

//Setting the profile pics for each service provider
profiles.forEach((profile, index) => {
  if (profile.image) {
    const imageElement = document.createElement("img");
    imageElement.src = petSitters[index].imageUrl;
    imageElement.alt = "Not Found";
    profile.image.appendChild(imageElement);
  }
});

//setting the hired state for each service provider
profiles.forEach((profile, index) => {
  if (profile && profile.hired) {

    if (petSitters[index].isHired) {  
      profile.hired.innerText = "Hired";
      profile.hired.setAttribute("href", "javascript:void(0)");
      profile.hired.classList.add("disabled");
    } else {
      profile.hired.innerText = "Hire Now";
      profile.hired.removeAttribute("href");
      profile.hired.classList.remove("disabled");
    }
  }
});

//Updating the states

profiles.forEach((profile, index) => {
  profile.hired &&
    profile.hired.addEventListener("click", (e) => {
      e.preventDefault();

      petSitters[index].isHired = true;

      localStorage.setItem(`hired_${petSitters[index].name}`, Date.now());

      localStorage.setItem("petSitters", JSON.stringify(petSitters));
      location.reload();
    });
});




let updateInterval;

function startUpdatingPetSitters() {
  clearInterval(updateInterval);
  updateInterval = setInterval(updateHiredPetSitters, 1000);
}

function stopUpdatingPetSitters() {
  clearInterval(updateInterval);
  console.log('Done')
}

startUpdatingPetSitters();

function updateHiredPetSitters() {
  petSitters.forEach((petSitter, index) => {
    const hiredTimestamp = localStorage.getItem(`hired_${petSitter.name}`);

    if (hiredTimestamp) {
      const currentTime = Date.now();
      const timeElapsed = currentTime - parseInt(hiredTimestamp, 10);
      const timeRemaining = 86400000 - timeElapsed;

      if (timeRemaining <= 0) {
        petSitter.isHired = false;

        localStorage.removeItem(`hired_${petSitter.name}`);
        localStorage.setItem("petSitters", JSON.stringify(petSitters))

        if (profiles[index].remainingTime) {
          const timeElement = profiles[index].remainingTime;
          timeElement.textContent = '';
        }

        stopUpdatingPetSitters();
        location.reload()

        alert('This PetSiiter is Available to Offer You Services');
      } else {
        const string = updateRemainingTime(timeRemaining);
        if (profiles[index].remainingTime) {
          const timeElement = profiles[index].remainingTime;
          timeElement.textContent = string;
        }
      }
    }
  });

}


const updateRemainingTime = (timeRemaining) => {

  const hours = Math.floor(timeRemaining / 3600000);
  const minutes = Math.floor((timeRemaining % 3600000) / 60000);
  const seconds = Math.floor((timeRemaining % 60000) / 1000);

  return `Available In ${hours} : ${minutes} : ${seconds}`;
}


