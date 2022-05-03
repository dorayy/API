const getCategorie = async () => {
  await axios
    .get("http://localhost:8080/categorie")
    .then((response) => {
      console.log(`GET categorie`, response.data);
    })
    .catch((error) => console.error(error));
};
getCategorie();
