'use strict';

// show all the products with binding the info for every product 

class ProductContainer extends React.Component {
    constructor(props) {
        super(props);
    }

    render() {
            return (
                <Product 
                    sku={product[0].sku} 
                    name={product[0].name} 
                    price={product[0].price} 
                    attribute={product[0].specific_attribute} 
                />
            );
    }
}

class Product extends React.Component {

  constructor(props) {
    super(props);
    this.state = {toDelete: false};
    this.toDeleteProduct = this.toDeleteProduct.bind(this);
  }
// make sure that the alternating of boolien is correct
  toDeleteProduct() {
    this.setState(state => ({toDelete: !state.toDelete}));
  }

    

  render() {

    return (
      <li className='product'>
        <input type="checkbox" className="delete-checkbox" onChange={this.toDeleteProduct}/>
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

const DeleteCheckbox = () =>  {
return <input type="checkbox" className="delete-checkbox" />;
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

const domContainer = document.querySelector('#products_container');
const root = ReactDOM.createRoot(domContainer);
   
    root.render(e);


