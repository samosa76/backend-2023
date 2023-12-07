const {index,store,update,destroy} = require("./controllers/FruitController.js");

const main = () => {
    console.log("Method index - show all fruits");
    index();
    console.log("\nMethod store - create new fruit (Banana)");
    store("Banana");
    console.log("\nMethod update - update fruit (watermelon to Melon)");
    update(0, "Melon");
    console.log("\nMethod destroy - delete fruit (Melon)");
    destroy(0);
}

main();