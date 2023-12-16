// console.log("satu");

// setTimeout(function() {
//     console.log("dua");
// }, 3000);

// console.log("tiga");


// console.log("Membuka Browser");

// setTimeout(() =>{
//     console.log("download 1 hour ...");
//     console.log("download complete");
// }, 5000);

// console.log("membuka tab baru");


const persiapan =() => {
    return new Promise((resolve) =>{
        setTimeout(() => {
            resolve("Menyiapkan Bahan");
        }, 3000);
    });
};

const rebusAir = () =>{
    return new Promise((resolve) => {
        setTimeout(() => {
            resolve("Merebus Air");
        }, 7000);
    });
};

const masak = () =>{
    return new Promise((resolve) => {
        setTimeout(function() {
            resolve("Memasak Mie");
        }, 5000);
    });
};

// const main = () => {
//     persiapan()
//         .then((res) =>{
//             console.log(res);
//             return rebusAir();
//         })
//         .then((res) => {
//             console.log(res);
//             return masak();
//         })
//         .then((res) =>{
//             console.log(res);
//         });
// };

const main = async () =>{
    console.log(await persiapan());
    console.log(await rebusAir());
    console.log(await masak());
}

main();

// main();

// const download = () =>{
//     return new Promise((resolve, reject) => {
//         const status = true;

//         setTimeout(() => {
//             if(status){
//                 resolve("download selesai");
//             } else {
//                 reject("donwload gagal");
//             }
//         }, 5000);
//     });
// };

// console.log(download());

// download()
//     .then((res) =>{
//         console.log(res);
//     })
//     .catch((err) => {
//         console.log(err);
//     });