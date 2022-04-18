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
                    attribute={product[0].attribute} 
                />
            );
    }
}

class Product extends React.Component {

    constructor(props) {
        super(props);
    }

    componentDidMount() {

    }

    componentWillUnmount() {

    }

    toDelete() {
        this.setState({deleted: true});
    }
    

    render() {

        let container = "";
    return (
    <li className='product'>
        <DeleteCheckbox  />
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

class DeleteCheckbox extends React.Component  {

    constructor(props) {
        super(props);
        //this.state={checked: false};
    }

render() {
    console.log(this.state);
return <input type="checkbox" className="delete-checkbox" />;
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
    return <div>{props.value}</div>;
}
function Attribute(props) {
    return <div>{props.value}</div>;
}


const e = <ProductContainer />;

const domContainer = document.querySelector('#products_container');
const root = ReactDOM.createRoot(domContainer);
   
    root.render(e);


