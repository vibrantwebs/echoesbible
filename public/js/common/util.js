export default class Util {

    static bindFunctionContext(ObjToBind) {
        // Create list of methods, loop over them all, and bind the context of 'this'
        let obj = Reflect.getPrototypeOf(ObjToBind);
        let keys = Reflect.ownKeys(obj);
        keys.forEach((k) => {
            ObjToBind[k] = ObjToBind[k].bind(ObjToBind);
        });
    }

    static parseMessage(serverData, fallbackMessage) {

        if (!fallbackMessage) {
            fallbackMessage = "Something went wrong";
        }

        let message = fallbackMessage;

        if (!serverData) {
            return message
        }

        if (serverData.message) {
            message = serverData.message;
        } else if (serverData.responseJSON && serverData.responseJSON.message) {
            message = serverData.responseJSON.message;
        }

        return message;
    }
}
