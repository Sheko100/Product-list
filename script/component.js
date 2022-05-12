'use strict';



class ProductContainer extends React.Component {
  constructor(props) {
    super(props);
    this.state = {productToDelete: Array(product.length).fill(false)};
    this.markProductToDelete = this.markProductToDelete.bind(this);
    this.massDelete = this.massDelete.bind(this);
    this.massDelete();
    this.productList =  product.map((prod, i) => { return (
      <Product 
        key={prod.productID}
        id={prod.productID}
        sku={prod.sku}
        name={prod.name}
        price={prod.price}
        attribute={prod.specific_attribute}
        productIndex={i}
        toDeleteProduct={this.markProductToDelete}
      />
    )});
  }


  markProductToDelete(i) {
  const newProductState = this.state.productToDelete.slice();
  newProductState[i] = !newProductState[i];
  this.setState({productToDelete: newProductState});
  }


  massDelete() {
    const deleteBtn = document.getElementById("delete-product-btn");
    const productId = [];

    deleteBtn.onclick = () => {
      let toDelete = this.state.productToDelete.slice();


      for(let i=0;i<this.productList.length;i++) {
        if(toDelete[i] && this.productList[i] != null) {
          productId.push(this.productList[i].props.id);
        }  
      }

      this.productList = this.productList.map((prod, i) => {
      
        // change it to ternary operator

       if(toDelete[i]) {
        return null
       } else {
         return prod;
       }
      });

      this.setState({productToDelete: toDelete});

      
      
      if(productId.length > 0) {

        const jsonId = JSON.stringify(productId);
        
      fetch(`../src/Store/Database/deleteRecord.php?id=${jsonId}`)
      .then(response => response.text())
      .then(state => console.log(state));
      }
    
    }

  }

  render() {

    return (
      <ul id="products_container">
      {this.productList}
      </ul>
    );
  }
}



class Product extends React.Component {

  constructor(props) {
    super(props);
    this.handleChange = this.handleChange.bind(this);
  }


  handleChange() {
    this.props.toDeleteProduct(this.props.productIndex);
  }
  
  render() {
    return (
      <li className='product'>
        <input type="checkbox" className="delete-checkbox" onChange={this.handleChange} />
        <ProductInfo 
          sku={this.props.sku}
          name={this.props.name}
          price={this.props.price}
          attribute={this.props.attribute}
        />
      </li>
    );

  }
}


function ProductInfo(props) {
  return (
    <div className="product_info_container">
      <Sku value={props.sku} />
      <Name value={props.name} />
      <Price value={props.price} />
      <Attribute value={props.attribute} />
    </div>
  );
}

function Sku(props) {
    return <div>{props.value}</div>;
}
function Name(props) {
    return <div>{props.value}</div>;
}
function Price(props) {
    return <div>{props.value}$</div>;
}
function Attribute(props) {
    return <div>{props.value}</div>;
}


const e = <ProductContainer />;
const domContainer = document.querySelector('#main_content');
const root = ReactDOM.createRoot(domContainer);
   
root.render(e);

    


