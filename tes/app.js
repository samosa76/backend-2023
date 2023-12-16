api.get("/students", (req, res) =>{
    res.send("Menampilkan semua students");
});

api.post("/students", (req, res) =>{
    res.send("Merubah data students");
});

api.put("/students", (req, res) =>{
    res.send("Mengedit data students");
});

api.delete("/students", (req, res) =>{
    res.send("Menghapus students");
});