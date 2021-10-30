// fetch('https://api.data.gov.in/resource/0dfebd78-bac4-44be-9291-025a983323f4?api-key=579b464db66ec23bdd00000188796cc0e4534c876707dfda18d61829&format=json&offset=0&limit=50&filters[pincode]=110001')
//     .then(res => res.json())
//     .then((out) => {
//         console.log('Output: ', out.records);
// }).catch(err => console.error(err));

// async function fetchData() {
//   const response = await fetch('https://api.data.gov.in/resource/0dfebd78-bac4-44be-9291-025a983323f4?api-key=579b464db66ec23bdd00000188796cc0e4534c876707dfda18d61829&format=json&offset=0&limit=50&filters[pincode]=110001');
//   // waits until the request completes...
//   return response;
// }

async function getData() {
  const response = await fetch("https://api.data.gov.in/resource/0dfebd78-bac4-44be-9291-025a983323f4?api-key=579b464db66ec23bdd00000188796cc0e4534c876707dfda18d61829&format=json&offset=0&limit=50&filters[pincode]=110001");

  return response.json();
}

const data = await getData();

console.log({ data })

// var table = $("#example").DataTable({
//   ajax: "https://api.data.gov.in/resource/0dfebd78-bac4-44be-9291-025a983323f4?api-key=579b464db66ec23bdd00000188796cc0e4534c876707dfda18d61829&format=json&offset=0&limit=50&filters[pincode]=110001",
//   deferRender: false,
//   stateSave: true,
//   columns: [
//     { data: "records.0.health_facility_name" },
//     { data: "records.0.health_facility_name" },
//     { data: "records.0.address" },
//     { data: "records.0.landmark" },
//     { data: "records.0.locality" }
//   ],

// });
