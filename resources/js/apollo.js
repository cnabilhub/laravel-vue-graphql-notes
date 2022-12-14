//Apollo config

import { ApolloClient, HttpLink, InMemoryCache } from '@apollo/client/core'
import { createApolloProvider } from '@vue/apollo-option'

const httpLink = new HttpLink({
    // You should use an absolute URL here
    uri: 'http://127.0.0.1:8000/graphql',
})

// Create the apollo client
const apolloClient = new ApolloClient({
    link: httpLink,
    cache: new InMemoryCache(),
    connectToDevTools: true,
})

// Create a provider
const apolloProvider = createApolloProvider({
    defaultClient: apolloClient,
})

export default apolloProvider;
